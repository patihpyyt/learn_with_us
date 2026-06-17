<x-app-layout>
    <script>
        window.MathJax = {
            tex: { inlineMath: [['\\(', '\\)']], displayMath: [['\\[', '\\]']], processEscapes: true }
        };
    </script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

    <x-slot name="title">AI Tools Assistant</x-slot>

    <div style="display: flex; gap: 24px; min-height: 80vh; align-items: flex-start; margin-top: 20px;">
        
        <div id="sidebar" style="width: 280px; background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px; display: flex; flex-direction: column; gap: 12px; flex-shrink: 0;">
            <a href="/ai" style="display: flex; align-items: center; justify-content: center; gap: 8px; background: #4F46E5; color: white; padding: 12px; border-radius: 8px; font-weight: bold; font-size: 14px; text-decoration: none;">
                ➕ Percakapan Baru
            </a>
            <hr style="border: 0; border-top: 1px solid #e2e8f0; margin: 8px 0;">
            <h4 style="font-size: 12px; color: #94a3b8; font-weight: 600; text-transform: uppercase; margin: 0 0 4px 4px;">Riwayat Obrolan</h4>
            
            <div id="history-list" style="display: flex; flex-direction: column; gap: 6px; max-height: 400px; overflow-y: auto;">
                @forelse($daftarRiwayat as $nav)
                    <a href="/ai?chat_id={{ $nav->chat_session_id }}" class="history-item" style="display: block; padding: 10px 12px; background: {{ request('chat_id') == $nav->chat_session_id ? '#e0e7ff' : 'transparent' }}; border-radius: 8px; font-size: 13px; text-decoration: none; color: #4b5563;">
                        💬 {{ Str::limit($nav->input_data, 24) }}
                    </a>
                @empty
                    <p id="no-history" style="font-size: 12px; color: #94a3b8; text-align: center; font-style: italic;">Belum ada riwayat chat.</p>
                @endforelse
            </div>
        </div>

        <div style="flex: 1; display: flex; flex-direction: column;">
            <h1>AI Tools Assistant</h1>
            <div id="chat-box" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px; min-height: 350px; max-height: 500px; overflow-y: auto; margin-bottom: 20px; display: flex; flex-direction: column; gap: 16px;">
                @foreach($percakapanAktif as $chat)
                    <div style="display: flex; justify-content: flex-end;"><div style="background: #4F46E5; color: white; padding: 12px 16px; border-radius: 18px 18px 4px 18px; max-width: 70%; font-size: 14px;">{{ $chat->input_data }}</div></div>
                    <div style="display: flex; justify-content: flex-start; gap: 10px;">
                        <div style="width: 32px; height: 32px; background: #4F46E5; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center;">✨</div>
                        <div class="ai-response" style="background: white; border: 1px solid #e2e8f0; padding: 16px; border-radius: 18px 18px 18px 4px; max-width: 80%; font-size: 14px;">{!! $chat->ai_response !!}</div>
                    </div>
                @endforeach
                <div id="loading-bubble-wrapper"></div>
            </div>

            <form id="chatForm">
                @csrf
                <div style="display: flex; gap: 10px; align-items: center;">
                    <input type="text" name="question" id="angka_kalkulator" placeholder="Tanyakan sesuatu..." style="flex: 1; padding: 14px 18px; border: 1px solid #cbd5e1; border-radius: 50px; outline: none;" required>
                    <button type="submit" style="background: #4F46E5; color: white; padding: 14px 24px; border: none; border-radius: 50px; cursor: pointer;">Kirim ✨</button>
                </div>
            </form>
        </div>
    </div>

<script>
    const chatBox = document.getElementById('chat-box');
    const loadingWrapper = document.getElementById('loading-bubble-wrapper');
    const historyList = document.getElementById('history-list');
    let currentSessionId = new URLSearchParams(window.location.search).get('chat_id');

    document.getElementById('chatForm').addEventListener('submit', async function(e) {
        e.preventDefault();
        const inputField = document.getElementById('angka_kalkulator');
        const userText = inputField.value.trim();
        
        // UI Update: User Chat
        chatBox.insertAdjacentHTML('beforeend', `<div style="display: flex; justify-content: flex-end; margin-bottom: 16px;"><div style="background:#4F46E5; color:white; padding:12px 16px; border-radius:18px 18px 4px 18px; max-width:70%; font-size:14px;">${userText}</div></div>`);
        inputField.value = '';
        loadingWrapper.innerHTML = `<div style="margin-bottom:16px;">...memproses...</div>`;
        chatBox.scrollTop = chatBox.scrollHeight;

        try {
            const response = await fetch("{{ route('ai.chat') }}", {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                body: JSON.stringify({ question: userText, chat_session_id: currentSessionId })
            });

            const data = await response.json();
            
         
            if(!currentSessionId) {
                const noHistory = document.getElementById('no-history');
                if(noHistory) noHistory.remove();
                
                const newLink = document.createElement('a');
                newLink.href = `/ai?chat_id=${data.chat_session_id}`;
                newLink.className = "history-item";
                newLink.style.cssText = "display: block; padding: 10px 12px; background: #e0e7ff; border-radius: 8px; font-size: 13px; text-decoration: none; color: #4F46E5; margin-bottom:6px;";
                newLink.innerHTML = `💬 ${userText.substring(0, 24)}...`;
                historyList.prepend(newLink);
                currentSessionId = data.chat_session_id;
                window.history.pushState({}, '', '/ai?chat_id=' + currentSessionId);
            }

            loadingWrapper.innerHTML = '';
            chatBox.insertAdjacentHTML('beforeend', `<div style="display: flex; justify-content: flex-start; gap: 10px; margin-bottom: 16px;"><div style="width:32px; height:32px; background:#4F46E5; color:white; border-radius:50%; display:flex; align-items:center; justify-content:center;">✨</div><div class="ai-response" style="background:white; border:1px solid #e2e8f0; padding:16px; border-radius:18px 18px 18px 4px; max-width:80%; font-size:14px;">${data.answer}</div></div>`);
            
            if (window.MathJax) MathJax.typesetPromise();
            chatBox.scrollTop = chatBox.scrollHeight;
        } catch(err) { loadingWrapper.innerHTML = `<div style="color:red;">Error.</div>`; }
    });
</script>
</x-app-layout>