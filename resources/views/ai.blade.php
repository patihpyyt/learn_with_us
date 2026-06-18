<x-app-layout>
    <x-slot name="title">AI Tools Assistant</x-slot>

    {{-- MathJax untuk rumus statistik --}}
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

    <div style="display: flex; gap: 24px; min-height: 80vh; align-items: flex-start; margin-top: 20px; padding: 0 20px;">
        {{-- SIDEBAR RIWAYAT --}}
        <div style="width: 280px; background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px; display: flex; flex-direction: column; gap: 12px; flex-shrink: 0;">
            <a href="/ai" style="background: #4F46E5; color: white; padding: 12px; border-radius: 8px; font-weight: bold; text-align: center; text-decoration: none;">➕ Percakapan Baru</a>
            <hr style="border: 0; border-top: 1px solid #e2e8f0;">
            <div style="display: flex; flex-direction: column; gap: 6px; max-height: 400px; overflow-y: auto;">
                @forelse($riwayat ?? collect() as $nav)
                    <a href="/ai?chat_id={{ $nav->id }}" style="padding: 10px; background: {{ request('chat_id') == $nav->id ? '#f0fdf4' : 'transparent' }}; border-radius: 8px; font-size: 13px; text-decoration: none; color: #4b5563;">
                        💬 {{ Str::limit($nav->input_data, 24) }}
                    </a>
                @empty
                    <p style="font-size: 12px; color: #94a3b8; text-align: center;">Belum ada riwayat.</p>
                @endforelse
            </div>
        </div>

        {{-- AREA CHAT --}}
        <div style="flex: 1; display: flex; flex-direction: column;">
            <div id="chat-box" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px; min-height: 400px; overflow-y: auto; margin-bottom: 20px; display: flex; flex-direction: column; gap: 16px;">
                @foreach($chatMasaLalu ?? collect() as $chat)
                    <div style="display: flex; justify-content: flex-end;">
                        <div style="background: #4F46E5; color: white; padding: 12px 16px; border-radius: 18px 18px 4px 18px; max-width: 70%;">{{ $chat->input_data }}</div>
                    </div>
                    <div style="display: flex; justify-content: flex-start; gap: 10px;">
                        <div style="background: white; border: 1px solid #e2e8f0; padding: 12px 16px; border-radius: 18px 18px 18px 4px; max-width: 70%;">{!! $chat->ai_response !!}</div>
                    </div>
                @endforeach

                {{-- loading-wrapper HARUS di dalam chat-box, supaya ikut keliatan & ke-scroll --}}
                <div id="loading-wrapper"></div>
            </div>

            <form id="chatForm" style="display: flex; gap: 10px; align-items: center;">
                @csrf
                <input type="text" id="inputPesan" placeholder="Tanyakan sesuatu..." style="flex: 1; padding: 14px 18px; border: 1px solid #cbd5e1; border-radius: 50px;" required>
                <button type="submit" id="btnKirim" style="background: #4F46E5; color: white; padding: 14px 24px; border: none; border-radius: 50px;">Kirim ✨</button>
            </form>

            @guest
                <p style="font-size: 12px; color: #94a3b8; text-align: center; margin-top: 10px;">
                  <a href="{{ route('login') }}" style="color: #4F46E5; font-weight: 600; text-decoration: none;">Login</a> agar riwayat chat kamu tersimpan.
                </p>
            @endguest
        </div>
    </div>

    <style>
        /* Loading titik-titik (...) yang animasi naik-turun */
        .typing-dots {
            display: inline-flex;
            background: white;
            border: 1px solid #e2e8f0;
            padding: 12px 18px;
            border-radius: 18px 18px 18px 4px;
        }
        .typing-dots span {
            font-size: 24px;
            line-height: 0;
            color: #4F46E5;
            font-weight: bold;
            animation: dot-blink 1.4s infinite ease-in-out;
            margin: 0 1px;
        }
        .typing-dots span:nth-child(1) { animation-delay: 0s; }
        .typing-dots span:nth-child(2) { animation-delay: 0.2s; }
        .typing-dots span:nth-child(3) { animation-delay: 0.4s; }

        @keyframes dot-blink {
            0%, 80%, 100% { opacity: 0.2; transform: translateY(0); }
            40% { opacity: 1; transform: translateY(-3px); }
        }
    </style>

    <script>
        const form = document.getElementById('chatForm');
        const chatBox = document.getElementById('chat-box');
        const input = document.getElementById('inputPesan');
        const loader = document.getElementById('loading-wrapper');
        const btnKirim = document.getElementById('btnKirim');

        function scrollToBottom() {
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        function tampilkanPesanUser(text) {
            const div = document.createElement('div');
            div.style.display = 'flex';
            div.style.justifyContent = 'flex-end';
            div.innerHTML = `<div style="background: #4F46E5; color: white; padding: 12px 16px; border-radius: 18px 18px 4px 18px; max-width: 70%;"></div>`;
            div.firstElementChild.textContent = text; // textContent biar aman dari XSS
            // sisipkan SEBELUM loader, bukan replace innerHTML chatBox
            chatBox.insertBefore(div, loader);
        }

        function tampilkanJawabanAI(html) {
            const div = document.createElement('div');
            div.style.display = 'flex';
            div.style.justifyContent = 'flex-start';
            div.style.gap = '10px';
            div.innerHTML = `<div style="background: white; border: 1px solid #e2e8f0; padding: 12px 16px; border-radius: 18px 18px 18px 4px; max-width: 70%;">${html}</div>`;
            chatBox.insertBefore(div, loader);
        }

        function tampilkanLoading() {
            loader.innerHTML = `
                <div style="display:flex; justify-content:flex-start; margin-top: 4px;">
                    <div class="typing-dots">
                        <span>.</span><span>.</span><span>.</span>
                    </div>
                </div>`;
        }

        function hapusLoading() {
            loader.innerHTML = '';
        }

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const text = input.value.trim();
            if (!text) return;

            tampilkanPesanUser(text);
            input.value = '';
            btnKirim.disabled = true;

            tampilkanLoading();
            scrollToBottom();

            try {
                const res = await fetch("{{ route('ai.chat') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({ input_data: text })
                });

                if (!res.ok) {
                    throw new Error('HTTP ' + res.status);
                }

                const data = await res.json();
                hapusLoading();

                if (data.answer) {
                    tampilkanJawabanAI(data.answer);
                } else {
                    tampilkanJawabanAI('<span style="color:#ef4444;">Maaf, tidak ada jawaban dari AI.</span>');
                }
                scrollToBottom();
            } catch (err) {
                hapusLoading();
                tampilkanJawabanAI(`<span style="color:#ef4444;">Gagal terhubung ke AI: ${err.message}</span>`);
                scrollToBottom();
            } finally {
                btnKirim.disabled = false;
            }
        });
    </script>
</x-app-layout>