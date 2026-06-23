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

                {{-- SIDEBAR KIRI --}}
                <div style="width: 25%; background-color: #f9fafb; padding: 16px; border-right: 1px solid #e5e7eb; max-height: 85vh; overflow-y: auto;">
                    <h3 style="font-weight: bold; color: #374151; margin-bottom: 16px; padding-left: 8px; padding-right: 8px; letter-spacing: 0.05em; text-transform: uppercase; font-size: 12px;">Daftar Isi</h3>
                    <nav style="display: flex; flex-direction: column; gap: 2px;">

                        {{-- KATA PENGANTAR --}}
                        <a href="?page=pengantar" style="display:block; padding:8px 12px; border-radius:6px; font-size:13px; font-weight:700; color:#4f46e5; text-decoration:none; background:#eef2ff; margin-bottom:2px;">
                           Kata Penghantar
                        </a>
                       <a href="?page=pengantar#sasaran-pembaca"  style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">
                            Sasaran Pembaca
                        </a>
                        <a href="?page=pengantar#tentang-penulis" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">
                            Tentang Penulis
                        </a>
                        <a href="?page=pengantar#ucapan-terima-kasih" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">
                            Ucapan Terima Kasih
                        </a>
                        <a href="?page=pengantar#umpan-balik-saran" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">
                            Umpan Balik &amp; Saran
                        </a>

                        {{-- BAB 1 --}}
                        <a href="?page=bab1" style="display:block; padding:8px 12px; border-radius:6px; font-size:13px; font-weight:700; color:#4f46e5; text-decoration:none; background:#eef2ff; margin-top:8px; margin-bottom:2px;">
                            BAB 1 - Pengenalan Fungsi &amp; Turunan
                        </a>
                        <a href="?page=bab1#latar" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">1.1 Latar Belakang</a>
                        <a href="?page=bab1#bab1-2" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">1.2 Tujuan Pembelajaran</a>
                        <a href="?page=bab1#bab1-3" style="display:block; padding:6px 12px 6px 22px; font-size:13px; 

                        {{-- BAB 2 --}}
                        <a href="?page=bab2" style="display:block; padding:8px 12px; border-radius:6px; font-size:13px; font-weight:700; color:#4f46e5; text-decoration:none; background:#eef2ff; margin-top:8px; margin-bottom:2px;">
                            BAB 2 - Landasan Teori Fungsi Turunan
                        </a>
                        <a href="?page=bab2-1" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">2.1 Definisi dan Aspek</a>
                        <a href="?page=bab2-1-1" style="display:block; padding:6px 12px 6px 36px; font-size:12px; color:#6b7280; text-decoration:none; border-radius:6px;">2.1.1 Definisi dan Notasi Turunan</a>
                        <a href="?page=bab2-1-2" style="display:block; padding:6px 12px 6px 36px; font-size:12px; color:#6b7280; text-decoration:none; border-radius:6px;">2.1.2 Definisi Formal Turunan</a>
                        <a href="?page=bab2-2" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">2.2 Aturan Dasar Turunan Fungsi Aljabar</a>
                        <a href="?page=bab2-2-1" style="display:block; padding:6px 12px 6px 36px; font-size:12px; color:#6b7280; text-decoration:none; border-radius:6px;">2.2.1 Aturan Konstanta</a>
                        <a href="?page=bab2-2-2" style="display:block; padding:6px 12px 6px 36px; font-size:12px; color:#6b7280; text-decoration:none; border-radius:6px;">2.2.2 Aturan Fungsi Identitas</a>
                        <a href="?page=bab2-3" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">2.3 Populasi dan Sampel</a>
                        <a href="?page=bab2-4" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">2.4 Populasi dan Sampel</a>

                        {{-- BAB 3 --}}
                        <a href="?page=bab3" style="display:block; padding:8px 12px; border-radius:6px; font-size:13px; font-weight:700; color:#4f46e5; text-decoration:none; background:#eef2ff; margin-top:8px; margin-bottom:2px;">
                            BAB 3 - Statistik Deskriptif
                        </a>
                        <a href="?page=bab3-1" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">3.1 Ukuran Pemusatan</a>
                        <a href="?page=bab3-1-1" style="display:block; padding:6px 12px 6px 36px; font-size:12px; color:#6b7280; text-decoration:none; border-radius:6px;">3.1.1 Mean</a>
                        <a href="?page=bab3-1-2" style="display:block; padding:6px 12px 6px 36px; font-size:12px; color:#6b7280; text-decoration:none; border-radius:6px;">3.1.2 Median</a>
                        <a href="?page=bab3-2" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">3.2 Ukuran Penyebaran</a>
                        <a href="?page=bab3-2-1" style="display:block; padding:6px 12px 6px 36px; font-size:12px; color:#6b7280; text-decoration:none; border-radius:6px;">3.2.1 Varians</a>
                        <a href="?page=bab3-2-2" style="display:block; padding:6px 12px 6px 36px; font-size:12px; color:#6b7280; text-decoration:none; border-radius:6px;">3.2.2 Standar Deviasi</a>
                        <a href="?page=bab3-3" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">3.3 Visualisasi Data</a>
                        <a href="?page=bab3-3-1" style="display:block; padding:6px 12px 6px 36px; font-size:12px; color:#6b7280; text-decoration:none; border-radius:6px;">3.3.1 Histogram</a>
                        <a href="?page=bab3-3-2" style="display:block; padding:6px 12px 6px 36px; font-size:12px; color:#6b7280; text-decoration:none; border-radius:6px;">3.3.2 Boxplot</a>

                        {{-- BAB 4 --}}
                        <a href="?page=bab4" style="display:block; padding:8px 12px; border-radius:6px; font-size:13px; font-weight:700; color:#4f46e5; text-decoration:none; background:#eef2ff; margin-top:8px; margin-bottom:2px;">
                            BAB 4 - Distribusi Probabilitas
                        </a>
                        <a href="?page=bab4-1" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">4.1 Konsep Probabilitas</a>
                        <a href="?page=bab4-2" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">4.2 Konsep Probabilitas</a>
                        <a href="?page=bab4-3" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">4.3 Distribusi Lainnya</a>

                        {{-- BAB 5 --}}
                        <a href="?page=bab5" style="display:block; padding:8px 12px; border-radius:6px; font-size:13px; font-weight:700; color:#4f46e5; text-decoration:none; background:#eef2ff; margin-top:8px; margin-bottom:2px;">
                            BAB 5 - Uji Hipotesis
                        </a>
                        <a href="?page=bab5-1" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">5.1 Konsep Uji Hipotesis</a>
                        <a href="?page=bab5-2" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">5.2 Uji Satu Sampel</a>
                        <a href="?page=bab5-2-1" style="display:block; padding:6px 12px 6px 36px; font-size:12px; color:#6b7280; text-decoration:none; border-radius:6px;">5.2.1 Uji t Satu Sampel</a>
                        <a href="?page=bab5-2-2" style="display:block; padding:6px 12px 6px 36px; font-size:12px; color:#6b7280; text-decoration:none; border-radius:6px;">5.2.2 Interpretasi Hasil</a>
                        <a href="?page=bab5-3" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">5.3 Uji Dua Sampel</a>
                        <a href="?page=bab5-3-1" style="display:block; padding:6px 12px 6px 36px; font-size:12px; color:#6b7280; text-decoration:none; border-radius:6px;">5.3.1 Uji t Independen</a>
                        <a href="?page=bab5-3-2" style="display:block; padding:6px 12px 6px 36px; font-size:12px; color:#6b7280; text-decoration:none; border-radius:6px;">5.3.2 Uji t Berpasangan</a>
                        <a href="?page=bab5-4" style="display:block; padding:6px 12px 6px 22px; font-size:13px; color:#4b5563; text-decoration:none; border-radius:6px;">5.4 ANOVA</a>
                        <a href="?page=bab5-4-1" style="display:block; padding:6px 12px 6px 36px; font-size:12px; color:#6b7280; text-decoration:none; border-radius:6px;">5.4.1 One-Way ANOVA</a>

                    </nav>
                </div>

                {{-- KONTEN KANAN --}}
                <div style="width: 75%; padding: 32px; background-color: #ffffff; overflow-y: auto; max-height: 85vh;">
                    @php $page = request('page', 'pengantar'); @endphp

                    @if($page == 'pengantar')
                      @include('materi.Kata-Pengantar-Fungsi-Turunan-Intrgral')
                    @elseif($page == 'bab1')
                        @include('materi.Bab-1-pendauluan')
                    @elseif($page == 'bab-2')
                        @include('materi.bab-2')
                    @elseif($page == 'bab2')
                        @include('materi.bab2')
                    @else
                        <p style="color:#6b7280;">Pilih materi dari daftar isi.</p>
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

            chatBox.classList.remove('hidden');
            chatBox.innerHTML += `<div class="text-right mb-2"><span class="bg-indigo-100 text-indigo-900 rounded-lg px-3 py-2 text-sm">${query}</span></div>`;
            
            const loadingId = 'loading-' + Date.now();
            chatBox.innerHTML += `<div class="text-left mb-2" id="${loadingId}"><span class="bg-gray-100 text-gray-500 rounded-lg px-3 py-2 text-sm italic">AI lagi mikir...</span></div>`;
            
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
                    chapter_title: "{{ request('page', 'pengantar') }}"
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