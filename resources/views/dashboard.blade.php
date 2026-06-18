<x-app-layout>
    <x-slot name="header">
        <h2 style="font-weight: 600; font-size: 20px; color: #1f2937; line-height: 1.25;">
            {{ __('Ruang Belajar Kalkulus') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/contrib/auto-render.min.js" 
            onload="renderMathInElement(document.body);"></script>

    <div style="padding-top: 24px; padding-bottom: 24px;">
        <div style="max-width: 1280px; margin-left: auto; margin-right: auto; padding-left: 24px; padding-right: 24px;">
            <div style="background-color: #ffffff; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.1); border-radius: 8px; display: flex; flex-direction: row; min-height: 70vh;">
                
                <div style="width: 25%; background-color: #f9fafb; padding: 16px; border-right: 1px solid #e5e7eb; max-height: 85vh; overflow-y: auto;">
                    <h3 style="font-weight: bold; color: #374151; margin-bottom: 16px; padding-left: 8px; padding-right: 8px; letter-spacing: 0.05em; text-transform: uppercase; font-size: 12px;">Daftar Isi</h3>
                    <nav style="display: flex; flex-direction: column; gap: 4px;">
                        @forelse($chapters as $chap)
                            <a href="{{ route('chapter.show', $chap->slug) }}" 
                               style="display: block; padding: 8px 12px; border-radius: 6px; font-size: 14px; font-weight: 500; text-decoration: none; transition: background-color 0.15s, color 0.15s; {{ ($currentChapter && $currentChapter->id === $chap->id) ? 'background-color: #4f46e5; color: #ffffff;' : 'color: #4b5563;' }}">
                                {{ $chap->title }}
                            </a>
                        @empty
                            <p style="color: #9ca3af; font-style: italic; font-size: 14px; padding: 10px;">Belum ada bab.</p>
                        @endforelse
                    </nav>
                </div>

                <div style="width: 75%; padding: 32px; background-color: #ffffff;">
                    @if(!$currentChapter)
                        <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%; text-align: center; color: #6b7280;">
                            <h2 style="font-size: 1.5rem; font-weight: 700; color: #1f2937; margin-bottom: 8px;">Materi Belum Tersedia</h2>
                            <p style="font-size: 0.95rem; color: #6b7280; max-width: 420px;">
                                Silakan pilih bab dari daftar isi di samping.
                            </p>
                        </div>
                    @else
                        <article>
                            <h1 style="font-size: 30px; font-weight: 800; color: #111827; border-bottom: 1px solid #e5e7eb; padding-bottom: 16px; margin-bottom: 24px;">
                                {{ $currentChapter->title }}
                            </h1>
                            <div style="color: #1f2937; line-height: 1.625; font-size: 16px;">
                                {!! Illuminate\Support\Str::markdown($currentChapter->content) !!}
                            </div>
                        </article>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        function sendQuestion() {
            const inputField = document.getElementById('user-query');
            const chatBox = document.getElementById('chat-box');
            const sendBtn = document.getElementById('send-btn');
            const query = inputField.value.trim();

            if (!query) return;

            // Tampilkan pesan user
            chatBox.classList.remove('hidden');
            chatBox.innerHTML += `<div class="text-right mb-2"><span class="bg-indigo-100 text-indigo-900 rounded-lg px-3 py-2 text-sm">${query}</span></div>`;
            
            // Tampilkan indikator "berpikir"
            const loadingId = 'loading-' + Date.now();
            chatBox.innerHTML += `<div class="text-left mb-2" id="${loadingId}"><span class="bg-gray-100 text-gray-500 rounded-lg px-3 py-2 text-sm italic">AI lagi mikir...</span></div>`;
            
            inputField.value = '';
            chatBox.scrollTop = chatBox.scrollHeight;
            sendBtn.disabled = true;

            // Kirim ke backend
            fetch("{{ route('ai.chat') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    question: query,
                    chapter_title: "{{ $currentChapter->title ?? 'Umum' }}"
                })
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById(loadingId).remove();
                chatBox.innerHTML += `<div class="text-left mb-2"><div class="bg-gray-100 text-gray-800 rounded-lg px-3 py-2 text-sm">${data.answer}</div></div>`;
                chatBox.scrollTop = chatBox.scrollHeight;
                sendBtn.disabled = false;
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById(loadingId).remove();
                alert('Gagal nyambung ke AI, cek koneksi atau API Key!');
                sendBtn.disabled = false;
            });
        }
    </script>
</x-app-layout>