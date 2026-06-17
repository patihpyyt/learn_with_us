<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ruang Belajar Kalkulus') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div style="display: grid; grid-template-columns: 300px 1fr; gap: 0; min-height: 70vh; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden; background: white;">

                <!-- SIDEBAR: DAFTAR ISI -->
                <div style="background: #f9fafb; border-right: 1px solid #e5e7eb; padding: 20px;">
                    <h3 style="font-weight: bold; margin-bottom: 15px; font-size: 14px; letter-spacing: 0.05em; color: #111827;">DAFTAR ISI</h3>
                    <nav>
                        @forelse($chapters as $chap)
                            <a href="{{ route('chapter.show', $chap->slug) }}"
                               style="display: block; padding: 10px; margin-bottom: 5px; border-radius: 6px; text-decoration: none; font-size: 14px; {{ $currentChapter && $currentChapter->id === $chap->id ? 'background: #4f46e5; color: white;' : 'color: #374151;' }}">
                                {{ $chap->title }}
                            </a>
                        @empty
                            <p style="color: #9ca3af; font-style: italic; font-size: 14px;">Belum ada bab.</p>
                        @endforelse
                    </nav>
                </div>

                <!-- PANEL KONTEN MATERI -->
                <div style="padding: 40px; overflow-y: auto;">
                    @if(!$currentChapter)
                        <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%; text-align: center; color: #6b7280;">
                            <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="#9ca3af" stroke-width="1.5" style="margin-bottom: 16px;">
                                <path d="M2 5.5C2 4.67 2.67 4 3.5 4H9a3 3 0 0 1 3 3v13a2.5 2.5 0 0 0-2.5-2.5H2.5A.5.5 0 0 1 2 17V5.5Z"/>
                                <path d="M22 5.5c0-.83-.67-1.5-1.5-1.5H15a3 3 0 0 0-3 3v13a2.5 2.5 0 0 1 2.5-2.5h6.5a.5.5 0 0 0 .5-.5V5.5Z"/>
                            </svg>
                            <h2 style="font-size: 1.5rem; font-weight: 700; color: #1f2937; margin-bottom: 8px;">Materi Belum Tersedia</h2>
                            <p style="font-size: 0.95rem; color: #6b7280; max-width: 420px;">
                                Silakan tambahkan data materi kalkulus / statistika kamu ke tabel database lewat phpMyAdmin terlebih dahulu.
                            </p>
                        </div>
                    @else
                        <article>
                            <h1 style="font-size: 2rem; font-weight: 800; border-bottom: 1px solid #e5e7eb; padding-bottom: 15px; margin-bottom: 25px;">
                                {{ $currentChapter->title }}
                            </h1>
                            <div style="line-height: 1.7;">
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