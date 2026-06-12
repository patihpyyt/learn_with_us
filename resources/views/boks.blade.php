<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title }}</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght=400;500;600;700&family=Playfair+Display:wght=600;700&family=Source+Serif+4:ital,opsz,wght=0,8..60,300;0,8..60,400;1,8..60,300&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    height: 100vh;
    overflow: hidden;
    font-family: 'Inter', Arial, sans-serif;
    background: #f5f2ed;
}

/* ─── SIDEBAR ─── */
.sidebar {
    width: 320px;
    background: #0f1923;
    color: white;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    height: 100vh;
    border-right: 1px solid #1e3040;
}

.sidebar::-webkit-scrollbar { width: 3px; }
.sidebar::-webkit-scrollbar-track { background: transparent; }
.sidebar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 2px; }

.logo {
    text-align: center;
    padding: 28px 24px 22px;
    border-bottom: 1px solid rgba(255,255,255,0.07);
    background: #0a1520;
}

.logo img {
    width: 80px;
    height: 80px;
    border-radius: 14px;
    background: white;
    border: 2px solid rgba(74,158,218,0.4);
}

.menu {
    padding: 10px 10px 24px;
}

.menu a {
    display: block;
    color: white;
    text-decoration: none;
    font-family: 'Inter', Arial, sans-serif;
    line-height: 1.4;
    border-radius: 8px;
    transition: background .15s, color .15s;
}

.menu a:hover {
    background: rgba(74,158,218,0.08);
    color: #a8d4f0;
}

.menu-chapter {
    font-weight: 700;
    font-size: 12px;
    padding: 12px 14px 8px;
    margin: 14px 0 2px 0;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    color: #4a9eda;
    border-radius: 0 !important;
    display: flex;
    align-items: center;
    gap: 8px;
}

.menu-chapter:first-child {
    margin-top: 6px;
}

.menu-chapter .num {
    background: rgba(74,158,218,0.2);
    color: #7fc4f5;
    width: 20px;
    height: 20px;
    border-radius: 5px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 10px;
    font-weight: 700;
    flex-shrink: 0;
}

.menu-sub {
    font-weight: 400;
    font-size: 12.5px;
    padding: 7px 14px 7px 28px;
    margin: 1px 0;
    color: #8aaec8;
}

.menu-sub-num {
    font-weight: 400;
    font-size: 12.5px;
    padding: 7px 14px 7px 14px;
    margin: 1px 0;
    color: #8aaec8;
}

.menu-sub-num .num,
.menu-chapter .num {
    font-weight: 700;
}

.menu-sub-num .num {
    font-size: 11px;
    color: #4a8aaa;
    margin-right: 4px;
    font-weight: 600;
}

.menu a.active {
    background: rgba(74,158,218,0.15);
    border-left: 2px solid #4a9eda;
    border-radius: 0 8px 8px 0;
    color: #7fc4f5;
}

.menu-sub-sub {
    font-weight: 400;
    font-size: 11.5px;
    padding: 6px 14px 6px 38px;
    margin: 0;
    border-radius: 6px;
    color: #5a7e98;
}

.menu-sub-sub .num {
    font-weight: 600;
    font-size: 10.5px;
    color: #3a6880;
    margin-right: 4px;
}

.menu-sub-sub:hover {
    background: rgba(74,158,218,0.06) !important;
    color: #8aaec8 !important;
}

.menu-chapter + .menu-chapter,
.menu-sub-sub + .menu-chapter,
.menu-sub-num + .menu-chapter,
.menu-sub + .menu-chapter {
    border-top: 1px solid rgba(255,255,255,0.05);
    margin-top: 16px;
    padding-top: 14px;
}

/* ─── MAIN CONTENT ─── */
.main {
    flex: 1;
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.toolbar {
    height: 60px;
    background: #fff;
    border-bottom: 1px solid #e8e0d0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 40px;
}

.toolbar-title {
    font-size: 14px;
    font-weight: 600;
    color: #7a6e5e;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    display: flex;
    align-items: center;
    gap: 15px;
}

.toolbar-title a {
    color: #4a9eda;
    text-decoration: none;
    font-size: 13px;
    padding: 4px 10px;
    background: rgba(74, 158, 218, 0.1);
    border-radius: 6px;
    transition: all 0.2s;
}

.toolbar-title a:hover {
    background: #4a9eda;
    color: #fff;
}

.auth-buttons {
    display: flex;
    gap: 12px;
    align-items: center;
}

.btn-auth {
    font-family: 'Inter', sans-serif;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    padding: 8px 18px;
    border-radius: 6px;
    transition: all 0.2s ease;
}

.btn-login {
    color: #1a1208;
    border: 1px solid #c8bfaa;
}

.btn-login:hover {
    background: #f5f2ed;
    border-color: #1a1208;
}

.btn-register {
    background: #4a9eda;
    color: white;
    border: 1px solid #4a9eda;
}

.btn-register:hover {
    background: #3586c2;
    border-color: #3586c2;
    box-shadow: 0 2px 4px rgba(74, 158, 218, 0.2);
}

.reader {
    flex: 1;
    overflow-y: auto;
    background: #faf8f4;
}

.reader::-webkit-scrollbar { width: 5px; }
.reader::-webkit-scrollbar-track { background: #f0ece4; }
.reader::-webkit-scrollbar-thumb { background: #c8bfaa; border-radius: 3px; }

.article {
    max-width: 860px;
    margin: auto;
    padding: 64px 72px 80px;
}

.article h1 {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 40px;
    font-weight: 700;
    line-height: 1.2;
    color: #1a1208;
    margin-bottom: 6px;
    letter-spacing: -0.01em;
}

.article h1::after {
    content: '';
    display: block;
    width: 48px;
    height: 4px;
    background: #4a9eda;
    border-radius: 2px;
    margin-top: 18px;
    margin-bottom: 36px;
}

.article h2 {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 26px;
    font-weight: 700;
    color: #1a1208;
    margin: 48px 0 16px;
    padding-bottom: 12px;
    border-bottom: 2px solid #e8e0d0;
    position: relative;
}

.article h2::before {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 40px;
    height: 2px;
    background: #4a9eda;
}

.article p {
    font-family: 'Source Serif 4', Georgia, serif;
    font-size: 17px;
    font-weight: 300;
    line-height: 1.95;
    color: #2d2416;
    margin-bottom: 18px;
}
</style>
</head>
<body>

<aside class="sidebar">
    <div class="logo">
        <img src="https://placehold.co/140x140" alt="logo">
    </div>

    <div class="menu">
    @auth
        <div class="menu-history-title" style="font-weight: 700; font-size: 11px; padding: 12px 14px 4px; margin-top: 10px; letter-spacing: 0.08em; text-transform: uppercase; color: #64748b;">
            💬 Riwayat Chat Kamu
        </div>
        
        @forelse($riwayat as $chat)
            <a href="{{ url('/ai?chat_id=' . $chat->id) }}" class="menu-history-item" style="font-weight: 400; font-size: 12px; padding: 8px 14px 8px 20px; color: #94a3b8; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: flex; align-items: center; gap: 8px; text-decoration: none;" title="{{ $chat->input_data }}">
                <span>⏱️</span> <span>{{ Str::limit($chat->input_data, 22) }}</span>
            </a>
        @empty
            <p style="font-size: 11px; color: #475569; padding: 8px 14px; font-style: italic;">Belum ada obrolan.</p>
        @endforelse
        
        <hr style="border: 0; border-top: 1px solid rgba(255,255,255,0.05); margin: 15px 10px 10px;">
    @endauth


        <!-- KATA PENGANTAR -->
        <a href="#" class="menu-chapter active">Kata Pengantar</a>
        <a href="#" class="menu-sub">Sasaran Pembaca</a>
        <a href="#" class="menu-sub">Tentang Penulis</a>
        <a href="#" class="menu-sub">Ucapan Terima Kasih</a>
        <a href="#" class="menu-sub">Umpan Balik &amp; Saran</a>

        <!-- BAB 1 -->
        <a href="#" class="menu-chapter">
            <span class="num">1</span> Pengenalan R &amp; Rstudio
        </a>
        <a href="#" class="menu-sub-num">
            <span class="num">1.1</span> Sejarah Singkat R
        </a>
        <a href="#" class="menu-sub-num">
            <span class="num">1.2</span> Tentang Rstudio
        </a>


        <a href="#" class="menu-sub-num">
            <span class="num">1.3</span> Instalasi R dan RStudio
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">1.3.1</span> Instalasi R
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">1.3.2</span> Instalasi RStudio
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">1.3.3</span> Konfigurasi Awal
            </a>


        <a href="#" class="menu-sub-num">
            <span class="num">1.4</span> Video Instalasi R &amp; RStudio
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">1.4.1</span> Persiapan Instalasi
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">1.4.2</span> Proses Instalasi
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">1.4.3</span> Syarat Titik Stasioner (Maksimum/Minimum)
            </a>


        <a href="#" class="menu-sub-num">
            <span class="num">1.5</span> Proses Penyelesaian Matematis
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">1.5.1</span> Menentukan Turunan Pertama Fungsi T(x)
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">1.5.2</span> Menerapkan Syarat Nilai Minimum
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">1.5.3</span>Perhitungan Nilai x Nyata
            </a>
        <a href="#" class="menu-sub-num">
            <span class="num">1.6</span> Analisis Hasil dan Kesimpulan Studi Kasus
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">1.6.1</span> Menghitung Waktu Respon Minimum
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">1.6.2</span> Interpretasi Grafik Fungsi Keseluruhan
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">1.6.3</span> Rekomendasi Batas Optimal Kapasitas Server
            </a>

             <a href="#" class="menu-sub-sub">
                <span class="num">1.6.4</span> Kesimpulan Akhir Bab 1
            </a>



        <!-- BAB 2 -->
        <a href="#" class="menu-chapter">
            <span class="num">2</span> Landasan Teori Fungsi Turunan
        </a>
        <a href="#" class="menu-sub-num">
            <span class="num">2.1</span> Definisi dan Aspek
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">2.1.1</span> Definisi dan Notasi Turunan
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">2.1.2</span> Definisi Formal Turunan
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">2.2.2</span> Notasi Aksendan Leibniz
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">2.1.2</span> Definisi Formal Turunan
            </a>
        <a href="#" class="menu-sub-num">
            <span class="num">2.2</span> Aturan Dasar Turunan Fungsi Aljabar
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">2.2.1</span> Aturan Konstanta
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">2.2.2</span> Aturan Fungsi Identitas
            </a>
             <a href="#" class="menu-sub-sub">
                <span class="num">2.2.3</span> Data Kualitatif
            </a>


        <a href="#" class="menu-sub-num">
            <span class="num">2.3</span> Populasi dan Sampel
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">2.3.1</span> Definisi Populasi
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">2.3.2</span> Teknik Sampling
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">2.3.3</span> Teknik Sampling
            </a>


            
        <a href="#" class="menu-sub-num">
            <span class="num">2.4</span> Populasi dan Sampel
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">2.4.1</span> Definisi Populasi
            </a>
            

        <!-- BAB 3 -->
        <a href="#" class="menu-chapter">
            <span class="num">3</span> Statistik Deskriptif
        </a>
        <a href="#" class="menu-sub-num">
            <span class="num">3.1</span> Ukuran Pemusatan
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">3.1.1</span> Mean
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">3.1.2</span> Median
            </a>
            


        <a href="#" class="menu-sub-num">
            <span class="num">3.2</span> Ukuran Penyebaran
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">3.2.1</span> Varians
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">3.2.2</span> Standar Deviasi
            </a>
           

        <a href="#" class="menu-sub-num">
            <span class="num">3.3</span> Visualisasi Data
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">3.3.1</span> Histogram
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">3.3.2</span> Boxplot
            </a>
        
              <a href="#" class="menu-sub-num">
            <span class="num">3.4</span> Visualisasi Data
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">3.4.1</span> Histogram
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">3.4.2</span> Boxplot
            </a>
             <a href="#" class="menu-sub-sub">
                <span class="num">3.4.3</span> Boxplot
            </a>
           
        <!-- BAB 4 -->
        <a href="#" class="menu-chapter">
            <span class="num">4</span> Distribusi Probabilitas
        </a>
        <a href="#" class="menu-sub-num">
            <span class="num">4.1</span> Konsep Probabilitas
        </a>
          

        <a href="#" class="menu-sub-num">
            <span class="num">4.2</span> Konsep Probabilitas
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">4.2.1</span> Histogram
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">4.2.2</span> Boxplot
            </a>
             <a href="#" class="menu-sub-sub">
                <span class="num">4.2.3</span> Boxplot
            </a>


        <a href="#" class="menu-sub-num">
            <span class="num">4.3</span> Distribusi Lainnya
        </a>
         


        <!-- BAB 5 -->
        <a href="#" class="menu-chapter">
            <span class="num">5</span> Uji Hipotesis
        </a>
        <a href="#" class="menu-sub-num">
            <span class="num">5.1</span> Konsep Uji Hipotesis
        </a>
        


        <a href="#" class="menu-sub-num">
            <span class="num">5.2</span> Uji Satu Sampel
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">5.2.1</span> Uji t Satu Sampel
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">5.2.2</span> Interpretasi Hasil
            </a>
        <a href="#" class="menu-sub-num">
            <span class="num">5.3</span> Uji Dua Sampel
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">5.3.1</span> Uji t Independen
            </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">5.3.2</span> Uji t Berpasangan
            </a>

            <a href="#" class="menu-sub-sub">
                <span class="num">5.3.3</span> Uji t Berpasangan
            </a>
        <a href="#" class="menu-sub-num">
            <span class="num">5.4</span> ANOVA
        </a>
            <a href="#" class="menu-sub-sub">
                <span class="num">5.4.1</span> One-Way ANOVA
            </a>
         

    </div>

</aside>

<div class="main">
    <header class="toolbar">
        <div class="toolbar-title">
            <span>Panduan Studi</span>
            <a href="{{ url('/ai') }}">🔍 Tanya AI</a> 
        </div>

        <div class="auth-buttons">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn-auth btn-register">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn-auth btn-login">Masuk</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-auth btn-register">Daftar</a>
                    @endif
                @endauth
            @endif
        </div>
    </header>

    <div class="reader">
        <div class="article">
            <h1>Bab 2 Konsep Dasar Statistik</h1>
            <h2>2.1 Definisi dan Aspek</h2>
            <p>Isi materi nanti taruh di sini.</p>
            
            </div>
    </div>
</div>

</body>
</html>