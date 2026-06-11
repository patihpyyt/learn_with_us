<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ruang Belajar Kalkulus AI') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/contrib/auto-render.min.js" 
            onload="renderMathInElement(document.body);"></script>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col md:flex-row min-h-[70vh]">
                
                <div class="w-full md:w-1/4 bg-gray-50 p-4 border-r border-gray-200">
                    <h3 class="font-bold text-gray-700 mb-4 px-2 tracking-wide uppercase text-sm">Daftar Isi</h3>
                    <nav class="space-y-1">
                        @foreach($chapters as $chap)
                            <a href="{{ route('chapter.show', $chap->slug) }}" 
                               class="block px-3 py-2 rounded-md text-sm font-medium transition-colors duration-150 {{ $currentChapter->id === $chap->id ? 'bg-indigo-600 text-white' : 'text-gray-600 hover:bg-gray-200 hover:text-gray-900' }}">
                                {{ $chap->title }}
                            </a>
                        @endforeach
                    </nav>
                </div>

                <div class="w-full md:w-3/4 p-6 md:p-8 bg-white">
                    <article class="prose max-w-none">
                        <h1 class="text-3xl font-extrabold text-gray-900 border-b pb-4 mb-6">
                            {{ $currentChapter->title }}
                        </h1>
                        
                        <div class="text-gray-800 leading-relaxed space-y-4 text-base">
                            {!! Illuminate\Support\Str::markdown($currentChapter->content) !!}
                        </div>
                    </article>

    <div class="mt-12 p-6 bg-indigo-50 rounded-xl border border-indigo-100">
        <div class="flex items-center space-x-3 mb-4">
            <div class="p-2 bg-indigo-600 rounded-lg text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>
            </div>
            <div>
                <h4 class="font-bold text-indigo-900">Asisten Kalkulus AI</h4>
                <p class="text-xs text-indigo-700">Tanyakan apapun tentang rumus atau konsep pada bab ini.</p>
            </div>
        </div>

        <div id="chat-box" class="space-y-4 max-h-60 overflow-y-auto mb-4 p-3 bg-white rounded-lg border border-gray-100 hidden">
            </div>

        <div class="flex items-center space-x-2">
            <input type="text" id="user-query" placeholder="Ketik pertanyaan kamu di sini... (Contoh: Mengapa hasil turunan dari x^2 adalah 2x?)" 
                class="flex-1 rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
            <button onclick="sendQuestion()" id="send-btn" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition shadow">
                Tanyakan
            </button>
        </div>
    </div>

    <script>
    function sendQuestion() {
        const inputField = document.getElementById('user-query');
        const chatBox = document.getElementById('chat-box');
        const sendBtn = document.getElementById('send-btn');
        const query = inputField.value.trim();

        if (!query) return;

        chatBox.classList.remove('hidden');


        chatBox.innerHTML += `
            <div class="text-right">
                <span class="inline-block bg-indigo-100 text-indigo-900 rounded-lg px-3 py-2 text-sm max-w-xl text-left">${query}</span>
            </div>
        `;
        
        const loadingId = 'loading-' + Date.now();
        chatBox.innerHTML += `
            <div class="text-left" id="${loadingId}">
                <span class="inline-block bg-gray-100 text-gray-500 rounded-lg px-3 py-2 text-sm italic">Sedang berpikir...</span>
            </div>
        `;
        
        inputField.value = '';
        chatBox.scrollTop = chatBox.scrollHeight;
        sendBtn.disabled = true;

        fetch("{{ route('ai.chat') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                question: query,
                chapter_title: "{{ $currentChapter->title }}"
            })
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById(loadingId).remove();

            chatBox.innerHTML += `
                <div class="text-left">
                    <div class="inline-block bg-gray-100 text-gray-800 rounded-lg px-3 py-2 text-sm max-w-xl markdown-body">
                        ${data.answer.replace(/\n/g, '<br>')}
                    </div>
                </div>
            `;
            
            renderMathInElement(chatBox);
            chatBox.scrollTop = chatBox.scrollHeight;
            sendBtn.disabled = false;
        })
        .catch(error => {
            console.error("Error:", error);
            document.getElementById(loadingId).remove();
            sendBtn.disabled = false;
        });
    }
    </script>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>