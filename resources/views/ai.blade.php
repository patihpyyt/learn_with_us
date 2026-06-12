<x-app-layout>
    <x-slot name="title">AI Tools Assistant</x-slot>
    <x-slot name="bookTitle">E-Book Statistika Dasar</x-slot>

    <h1> AI Tools Assistant</h1>
    <p style="color: #6b7280; margin-bottom: 24px;">Tanyakan apa saja seputar statistika, AI siap membantu!</p>

    {{-- Amankan variabel riwayat agar tidak bikin halaman putih polos --}}
    @php
        $daftarRiwayat = $riwayat ?? [];
    @endphp

    {{-- Notifikasi jika riwayat belum dikirim dari Controller --}}
    @if(!isset($riwayat)) 
        <div style="background: #fffbeb; border: 1px solid #fef3c7; padding: 12px; border-radius: 8px; color: #b45309; margin-bottom: 15px; font-size: 14px;">
            ⚠️ <strong>Developer Note:</strong> Variabel <code>$riwayat</code> belum di-load/dikirim dari Controller.
        </div>
    @endif

    {{-- Area Chat History --}}
    <div id="chat-box" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px; min-height: 300px; max-height: 500px; overflow-y: auto; margin-bottom: 20px; display: flex; flex-direction: column; gap: 16px;">
        
        {{-- Riwayat dari database --}}
        @forelse($daftarRiwayat as $item)
            {{-- Bubble User --}}
            <div style="display: flex; justify-content: flex-end;">
                <div style="background: #4F46E5; color: white; padding: 12px 16px; border-radius: 18px 18px 4px 18px; max-width: 70%; font-size: 14px; line-height: 1.6;">
                    {{ $item->input_data }}
                </div>
            </div>
            {{-- Bubble AI --}}
            <div style="display: flex; justify-content: flex-start; gap: 10px;">
                <div style="width: 32px; height: 32px; background: #4F46E5; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 16px; flex-shrink: 0;">✨</div>
                <div style="background: white; border: 1px solid #e2e8f0; padding: 12px 16px; border-radius: 18px 18px 18px 4px; max-width: 70%; font-size: 14px; line-height: 1.6; white-space: pre-line;">
                    {!! $item->ai_response !!}
                </div>
            </div>
        @empty
            {{-- Tampilkan ini jika riwayatnya kosong tapi variabelnya ada --}}
            @if(isset($riwayat))
                <div style="text-align: center; color: #9ca3af; margin: auto;">
                    <p style="font-size: 32px;">✨</p>
                    <p>Belum ada percakapan. Mulai tanya sesuatu!</p>
                </div>
            @endif
        @endforelse

        {{-- Tampilkan jawaban terbaru dari session --}}
        @if(session('input_user'))
            <div style="display: flex; justify-content: flex-end;">
                <div style="background: #4F46E5; color: white; padding: 12px 16px; border-radius: 18px 18px 4px 18px; max-width: 70%; font-size: 14px; line-height: 1.6;">
                    {{ session('input_user') }}
                </div>
            </div>
        @endif

        @if(session('sukses_ai'))
            <div style="display: flex; justify-content: flex-start; gap: 10px;">
                <div style="width: 32px; height: 32px; background: #4F46E5; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 16px; flex-shrink: 0;">✨</div>
                <div style="background: white; border: 1px solid #e2e8f0; padding: 12px 16px; border-radius: 18px 18px 18px 4px; max-width: 70%; font-size: 14px; line-height: 1.6; white-space: pre-line;">
                    {!! session('sukses_ai') !!}
                </div>
            </div>
        @endif

        @if(session('error_ai'))
            <div style="background: #fef2f2; border: 1px solid #fca5a5; padding: 12px 16px; border-radius: 8px; color: #b91c1c; font-size: 14px;">
                ❌ {{ session('error_ai') }}
            </div>
        @endif
    </div>

    {{-- Input Form --}}
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

    <script>
        
        const chatBox = document.getElementById('chat-box');
        if(chatBox) {
            chatBox.scrollTop = chatBox.scrollHeight;
        }
    </script>
</x-app-layout>