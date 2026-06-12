<x-app-layout>
    <x-slot name="title">AI Tools Assistant</x-slot>
    <x-slot name="bookTitle">E-Book Statistika Dasar</x-slot>


    @php
        $daftarRiwayat = $riwayat ?? collect();
        $percakapanAktif = $chatMasaLalu ?? collect();
    @endphp


    <div style="display: flex; gap: 24px; min-height: 80vh; align-items: flex-start; margin-top: 20px;">
        
     
        <div style="width: 280px; background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px; display: flex; flex-direction: column; gap: 12px; flex-shrink: 0;">
            
            {{-- Tombol untuk buat chat baru murni --}}
            <a href="/ai" style="display: flex; align-items: center; justify-content: center; gap: 8px; background: #4F46E5; color: white; padding: 12px; border-radius: 8px; font-weight: bold; font-size: 14px; text-decoration: none; text-align: center; transition: background 0.2s;">
                ➕ Percakapan Baru
            </a>

            <hr style="border: 0; border-top: 1px solid #e2e8f0; margin: 8px 0;">
            
            <h4 style="font-size: 12px; color: #94a3b8; font-weight: 600; text-transform: uppercase; margin: 0 0 4px 4px;">Riwayat Obrolan</h4>
            
            {{-- Loop daftar riwayat chat yang tersimpan di database --}}
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

            {{-- AREA UTAMA CHAT BOX --}}
            <div id="chat-box" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px; min-height: 350px; max-height: 500px; overflow-y: auto; margin-bottom: 20px; display: flex; flex-direction: column; gap: 16px;">
                
                {{-- JIKA ADA PERCAKAPAN AKTIF (Dalam Sesi Chat) --}}
                @if($percakapanAktif->count() > 0)
                    @foreach($percakapanAktif as $chat)
                        {{-- Bubble User --}}
                        <div style="display: flex; justify-content: flex-end;">
                            <div style="background: #4F46E5; color: white; padding: 12px 16px; border-radius: 18px 18px 4px 18px; max-width: 70%; font-size: 14px; line-height: 1.6;">
                                {{ $chat->input_data }}
                            </div>
                        </div>
                        {{-- Bubble AI --}}
                        <div style="display: flex; justify-content: flex-start; gap: 10px;">
                            <div style="width: 32px; height: 32px; background: #4F46E5; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 16px; flex-shrink: 0;">✨</div>
                            <div style="background: white; border: 1px solid #e2e8f0; padding: 12px 16px; border-radius: 18px 18px 18px 4px; max-width: 70%; font-size: 14px; line-height: 1.6; white-space: pre-line;">
                                {!! $chat->ai_response !!}
                            </div>
                        </div>
                    @endforeach
                @else
                    {{-- TAMPILAN AWAL PERTAMA KALI BUKA: BENER-BENER BERSIH/KOSONG --}}
                    <div style="text-align: center; color: #9ca3af; margin: auto;">
                        <p style="font-size: 32px;">✨</p>
                        <h3 style="font-size: 16px; font-weight: 600; margin: 10px 0 4px; color: #1e293b;">Ada yang bisa dibantu?</h3>
                        <p style="font-size: 13px; color: #94a3b8;">Tanyakan apa saja seputar statistika atau kalkulus.</p>
                    </div>
                @endif

                {{-- Notifikasi Error --}}
                @if(session('error_ai'))
                    <div style="background: #fef2f2; border: 1px solid #fca5a5; padding: 12px 16px; border-radius: 8px; color: #b91c1c; font-size: 14px;">
                        ❌ {{ session('error_ai') }}
                    </div>
                @endif
            </div>

            {{-- FORM INPUT --}}
            <form action="{{ route('ai.chat') }}" method="POST">
                @csrf
                <div style="display: flex; gap: 10px; align-items: center;">
                    <input type="text" name="angka_kalkulator" id="angka_kalkulator"
                           placeholder="Tanyakan sesuatu tentang statistika..."
                           style="flex: 1; padding: 14px 18px; border: 1px solid #cbd5e1; border-radius: 50px; font-size: 14px; outline: none;"
                           required autofocus>
                    <button type="submit" style="background: #4F46E5; color: white; padding: 14px 24px; border: none; border-radius: 50px; cursor: pointer; font-weight: bold; font-size: 14px; white-space: nowrap;">
                        Kirim ✨
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

    <script>
        const chatBox = document.getElementById('chat-box');
        if(chatBox) {
            chatBox.scrollTop = chatBox.scrollHeight;
        }
    </script>
</x-app-layout>