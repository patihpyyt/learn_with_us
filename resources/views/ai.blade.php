<x-app-layout>

    <script>
        window.MathJax = {
            tex: {
                inlineMath: [['\\(', '\\)']],
                displayMath: [['\\[', '\\]']],
                processEscapes: true
            }
        };
    </script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

    <x-slot name="title">AI Tools Assistant</x-slot>
    <x-slot name="bookTitle">E-Book Statistika Dasar</x-slot>

    @php
        $daftarRiwayat = $riwayat ?? collect();
        $percakapanAktif = $chatMasaLalu ?? collect();
    @endphp

    <div style="display: flex; gap: 24px; min-height: 80vh; align-items: flex-start; margin-top: 20px;">
        
        <div style="width: 280px; background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px; display: flex; flex-direction: column; gap: 12px; flex-shrink: 0;">
            <a href="/ai" style="display: flex; align-items: center; justify-content: center; gap: 8px; background: #4F46E5; color: white; padding: 12px; border-radius: 8px; font-weight: bold; font-size: 14px; text-decoration: none; text-align: center; transition: background 0.2s;">
                ➕ Percakapan Baru
            </a>

            <hr style="border: 0; border-top: 1px solid #e2e8f0; margin: 8px 0;">
            
            <h4 style="font-size: 12px; color: #94a3b8; font-weight: 600; text-transform: uppercase; margin: 0 0 4px 4px;">Riwayat Obrolan</h4>
            
            <div style="display: flex; flex-direction: column; gap: 6px; max-height: 400px; overflow-y: auto; padding-right: 4px;">
                @forelse($daftarRiwayat as $nav)
                    <a href="/ai?chat_id={{ $nav->id }}" 
                       style="display: block; padding: 10px 12px; background: {{ request('chat_id') == $nav->id ? '#f0fdf4' : (session('active_chat_session') == $nav->chat_session_id ? '#e0e7ff' : 'transparent') }}; color: {{ (request('chat_id') == $nav->id || session('active_chat_session') == $nav->chat_session_id) ? '#4F46E5' : '#4b5563' }}; border: 1px solid {{ (request('chat_id') == $nav->id || session('active_chat_session') == $nav->chat_session_id) ? '#c7d2fe' : 'transparent' }}; border-radius: 8px; font-size: 13px; text-decoration: none; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: {{ (request('chat_id') == $nav->id || session('active_chat_session') == $nav->chat_session_id) ? '600' : 'normal' }}; transition: all 0.2s;"
                       title="{{ $nav->input_data }}">
                       💬 {{ Str::limit($nav->input_data, 24) }}
                    </a>
                @empty
                    <p style="font-size: 12px; color: #94a3b8; text-align: center; font-style: italic; margin-top: 10px;">
                        Belum ada riwayat chat.
                    </p>
                @endforelse
            </div>
        </div>

        <div style="flex: 1; display: flex; flex-direction: column;">
            
            <h1>AI Tools Assistant</h1>
            <p style="color: #6b7280; margin-bottom: 24px;">Tanyakan apa saja seputar statistika, AI siap membantu!</p>
            
            <div id="chat-box" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px; min-height: 350px; max-height: 500px; overflow-y: auto; margin-bottom: 20px; display: flex; flex-direction: column; gap: 16px;">
                @if($percakapanAktif->count() > 0)
                    @foreach($percakapanAktif as $chat)
                        <div style="display: flex; justify-content: flex-end;">
                            <div style="background: #4F46E5; color: white; padding: 12px 16px; border-radius: 18px 18px 4px 18px; max-width: 70%; font-size: 14px;">{{ $chat->input_data }}</div>
                        </div>
                        <div style="display: flex; justify-content: flex-start; gap: 10px;">
                            <div style="width: 32px; height: 32px; background: #4F46E5; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">✨</div>
                            <div class="ai-response" style="background: white; border: 1px solid #e2e8f0; padding: 16px; border-radius: 18px 18px 18px 4px; max-width: 80%; font-size: 14px; color: #1f2937; line-height: 1.7;">{!! $chat->ai_response !!}</div>
                        </div>
                    @endforeach
                @endif
                <div id="loading-bubble-wrapper"></div>
            </div>

            <form action="{{ route('ai.chat') }}" method="POST" id="chatForm">
                @csrf
                <div style="display: flex; gap: 10px; align-items: center;">
                    <input type="text" name="question" id="angka_kalkulator" placeholder="Tanyakan sesuatu tentang statistika..." style="flex: 1; padding: 14px 18px; border: 1px solid #cbd5e1; border-radius: 50px; font-size: 14px; outline: none; color: #000;" required autofocus autocomplete="off">
                    <button type="submit" id="btnKirim" style="background: #4F46E5; color: white; padding: 14px 24px; border: none; border-radius: 50px; cursor: pointer; font-weight: bold; font-size: 14px; white-space: nowrap; display: flex; align-items: center; gap: 6px; transition: all 0.2s;">
                        <span id="btnText">Kirim ✨</span>
                    </button>
                </div>
            </form>

            @if(!auth()->check())
                <p style="text-align: center; color: #9ca3af; font-size: 13px; margin-top: 12px;">
                    💡 <a href="/login" style="color: #4F46E5;">Login</a> untuk menyimpan riwayat chat kamu
                </p>
            @endif
        </div>
    </div>

    <style>
        .ai-response { white-space: pre-wrap; word-wrap: break-word; }
        @keyframes blink { 0% { opacity: .2; } 20% { opacity: 1; } 100% { opacity: .2; } }
        .typing-dot { animation: blink 1.4s infinite; display: inline-block; width: 8px; height: 8px; background-color: #4b5563; border-radius: 50%; margin-right: 4px; }
    </style>

    <script>
        const chatBox = document.getElementById('chat-box');
        const loadingWrapper = document.getElementById('loading-bubble-wrapper');
        if(chatBox) chatBox.scrollTop = chatBox.scrollHeight;

        document.getElementById('chatForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const inputField = document.getElementById('angka_kalkulator');
            const userText = inputField.value.trim();
            if(!userText) return;

            const userDiv = document.createElement('div');
            userDiv.style.cssText = "display: flex; justify-content: flex-end; margin-bottom: 16px;";
            userDiv.innerHTML = `<div style="background: #4F46E5; color: white; padding: 12px 16px; border-radius: 18px 18px 4px 18px; max-width: 70%; font-size: 14px;">${userText}</div>`;
            chatBox.insertBefore(userDiv, loadingWrapper);
            inputField.value = '';
            
            loadingWrapper.innerHTML = `<div style="display:flex; align-items:center; gap:4px; margin-bottom:16px;"><span class="typing-dot"></span><span class="typing-dot"></span><span class="typing-dot"></span></div>`;
            chatBox.scrollTop = chatBox.scrollHeight;

            try {
                const response = await fetch('/ai/chat', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}', 'Accept': 'application/json' },
                    body: JSON.stringify({ question: userText })
                });
                const data = await response.json();
                
                const aiDiv = document.createElement('div');
                aiDiv.style.cssText = "display: flex; justify-content: flex-start; gap: 10px; margin-bottom: 16px;";
                aiDiv.innerHTML = `<div style="width:32px; height:32px; background:#4F46E5; color:white; border-radius:50%; display:flex; align-items:center; justify-content:center;">✨</div><div class="ai-response" style="background:white; border:1px solid #e2e8f0; padding:16px; border-radius:18px 18px 18px 4px; max-width:80%; font-size:14px; color:#1f2937; line-height:1.7;">${data.answer}</div>`;
                chatBox.insertBefore(aiDiv, loadingWrapper);
                loadingWrapper.innerHTML = '';
                
                if (window.MathJax) MathJax.typesetPromise();
                chatBox.scrollTop = chatBox.scrollHeight;
            } catch(error) {
                loadingWrapper.innerHTML = `<div style="color:red; margin-bottom:16px;">❌ ${error.message}</div>`;
            }
        });
    </script>
</x-app-layout>