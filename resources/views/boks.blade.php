<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title }}</title>
<link rel="icon" href="{{ asset('img/logo.ico') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

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
    background: #ffffff;
}

/* ─── SIDEBAR ─── */
.sidebar {
    width: 300px;
    background: #2c4a6e;
    color: white;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    height: 100vh;
    flex-shrink: 0;
}

.sidebar::-webkit-scrollbar { width: 6px; }
.sidebar::-webkit-scrollbar-track { background: transparent; }
.sidebar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.15); border-radius: 3px; }

.logo {
    text-align: center;
    padding: 30px 24px 24px;
}

.logo img {
    width: 110px;
    height: 110px;
    border-radius: 50%;
    background: white;
    object-fit: cover;
}

.menu {
    padding: 0 0 24px;
}

.menu a {
    display: block;
    color: #e8edf2;
    text-decoration: none;
    font-family: 'Inter', Arial, sans-serif;
    line-height: 1.4;
    transition: background .15s, color .15s;
}

.menu a:hover {
    background: rgba(255,255,255,0.08);
    color: #ffffff;
}

.menu-chapter {
    font-weight: 700;
    font-size: 15px;
    padding: 11px 24px;
    color: #ffffff;
    display: flex;
    align-items: center;
    gap: 6px;
}

.menu-chapter .num {
    font-weight: 700;
}

.menu-sub {
    font-weight: 400;
    font-size: 14px;
    padding: 11px 24px 11px 40px;
    color: #e8edf2;
}

.menu-sub-num {
    font-weight: 600;
    font-size: 14px;
    padding: 11px 24px;
    color: #ffffff;
}

.menu-sub-num .num {
    font-weight: 600;
    margin-right: 4px;
}

.menu a.active {
    background: #6b7f93 !important;
    color: #ffffff !important;
    font-weight: 600;
}

.menu-sub-sub {
    font-weight: 400;
    font-size: 13.5px;
    padding: 10px 24px 10px 52px;
    color: #d7dee5;
}

.menu-sub-sub .num {
    font-weight: 500;
    margin-right: 4px;
}

.menu-sub-sub:hover {
    background: rgba(255,255,255,0.08) !important;
    color: #ffffff !important;
}

.menu-history-title {
    font-weight: 700;
    font-size: 11px;
    padding: 16px 24px 6px;
    margin-top: 4px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #9fb3c4;
}

.menu-history-item {
    font-weight: 400;
    font-size: 13px;
    padding: 9px 24px 9px 24px;
    color: #c2d0db;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
}

/* ─── MAIN CONTENT ─── */
.main {
    flex: 1;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: relative;
}

.toolbar {
    height: 52px;
    background: #fff;
    border-bottom: 1px solid #ebebeb;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 24px;
    flex-shrink: 0;
}

.toolbar-left {
    display: flex;
    align-items: center;
    gap: 22px;
}

.toolbar-icon {
    color: #9aa5b1;
    text-decoration: none;
    font-size: 16px;
    display: inline-flex;
    align-items: center;
    transition: color .15s;
}

.toolbar-icon:hover {
    color: #2c4a6e;
}

.toolbar-title {
    font-size: 13px;
    font-weight: 600;
    color: #6b7280;
    display: flex;
    align-items: center;
    gap: 18px;
}

.toolbar-title a.ask-ai {
    color: #2c7bd6;
    text-decoration: none;
    font-size: 13px;
    padding: 5px 12px;
    background: rgba(44,123,214,0.08);
    border-radius: 6px;
    transition: all 0.2s;
}

.toolbar-title a.ask-ai:hover {
    background: #2c7bd6;
    color: #fff;
}

.toolbar-right {
    display: flex;
    align-items: center;
    gap: 18px;
}

.toolbar-right a {
    color: #9aa5b1;
    text-decoration: none;
    font-size: 15px;
    transition: color .15s;
}

.toolbar-right a:hover {
    color: #2c4a6e;
}

.auth-buttons {
    display: flex;
    gap: 10px;
    align-items: center;
    margin-left: 10px;
}

.btn-auth {
    font-family: 'Inter', sans-serif;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    padding: 7px 16px;
    border-radius: 6px;
    transition: all 0.2s ease;
}

.btn-login {
    color: #2c4a6e;
    border: 1px solid #d0d5dd;
}

.btn-login:hover {
    background: #f5f7fa;
    border-color: #2c4a6e;
}

.btn-register {
    background: #2c4a6e;
    color: white;
    border: 1px solid #2c4a6e;
}

.btn-register:hover {
    background: #1e3550;
    border-color: #1e3550;
}

/* ─── READER ─── */
.reader {
    flex: 1;
    overflow-y: auto;
    background: #ffffff;
    position: relative;
}

.reader::-webkit-scrollbar { width: 8px; }
.reader::-webkit-scrollbar-track { background: #f5f5f5; }
.reader::-webkit-scrollbar-thumb { background: #d0d5dd; border-radius: 4px; }

.article {
    max-width: 880px;
    margin: auto;
    padding: 56px 64px 32px;
}

.article h1 {
    font-family: 'Inter', Arial, sans-serif;
    font-size: 34px;
    font-weight: 700;
    line-height: 1.3;
    color: #1f2937;
    margin-bottom: 28px;
}

.article h2.subtitle {
    font-family: 'Inter', Arial, sans-serif;
    font-style: italic;
    font-size: 24px;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 22px;
}

.article .authors p {
    font-family: 'Inter', Arial, sans-serif;
    font-style: italic;
    font-size: 16px;
    font-weight: 400;
    color: #374151;
    line-height: 1.7;
    margin-bottom: 0;
}

.article .pub-date {
    font-family: 'Inter', Arial, sans-serif;
    font-style: italic;
    font-size: 15px;
    color: #374151;
    margin: 22px 0 36px;
}

.article h2 {
    font-family: 'Inter', Arial, sans-serif;
    font-size: 26px;
    font-weight: 700;
    color: #1f2937;
    margin: 8px 0 20px;
}

.article p {
    font-family: 'Inter', Arial, sans-serif;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.85;
    color: #1f2937;
    margin-bottom: 18px;
}

.article .banner {
    display: block;
    max-width: 100%;
    border-radius: 6px;
    margin-top: 24px;
}

/* ─── NAV ARROW: sekarang nempel ke .main (gak discroll), bukan ke .reader ─── */
.page-nav-float {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #c4cdd6;
    text-decoration: none;
    transition: color .15s;
    z-index: 50;
    background: rgba(255, 255, 255, 0.85);
    padding: 10px;
    border-radius: 50%;
    box-shadow: 0 1px 4px rgba(0,0,0,0.08);
}

.page-nav-float:hover {
    color: #2c4a6e;
    background: #f0f0f0;
}

.page-nav-float-prev {
    left: 12px;
}

.page-nav-float-next {
    right: 12px;
}
</style>
</head>
<body>

<aside class="sidebar">
    <div class="logo">
        <img src="img/udin.png" alt="logo">
    </div>
<div style="padding: 0 24px 20px;">
    <p style="font-weight: 600; font-size: 14px; margin: 0 0 2px; color: #ffffff;">Kelompok 8</p>
    <p style="font-size: 12px; color: #9fb3c4; margin: 0 0 12px;">Fungsi Turunan dan Integral</p>
    <p style="font-size: 13px; color: #e8edf2; margin: 0; line-height: 1.9;">
        M. Iqbal Patih<br>
        Abimanyu<br>
        Julianto Baharu<br>
        M. Rizky Alvarezi N.
    </p>
</div>

    <div class="menu" id="sidebar-menu">
    @auth
        <div class="menu-history-title">
            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" style="vertical-align:-1px; margin-right:5px;"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
            Riwayat Chat Kamu
        </div>

        @forelse($riwayat ?? [] as $chat)
            <a href="{{ url('/ai?chat_id=' . $chat->id) }}" class="menu-history-item" title="{{ $chat->input_data }}">
                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" style="flex-shrink:0;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>{{ Str::limit($chat->input_data, 22) }}</span>
            </a>
        @empty
            <p style="font-size: 11px; color: #9fb3c4; padding: 8px 24px; font-style: italic;">Belum ada obrolan.</p>
        @endforelse

        <hr style="border: 0; border-top: 1px solid rgba(255,255,255,0.1); margin: 12px 24px 6px;">
    @endauth


        <!-- KATA PENGANTAR -->
        <a href="#" data-page="Kata-Pengantar-Fungsi-Turunan-Intrgral" class="menu-chapter">Kata Pengantar</a>
        <a href="#" data-page="sasaran-pembaca" class="menu-sub">Sasaran Pembaca</a>
        <a href="#" data-page="tentang-penulis" class="menu-sub">Tentang Penulis</a>
        <a href="#" data-page="ucapan-terima-kasih" class="menu-sub">Ucapan Terima Kasih</a>
        <a href="#" data-page="umpan-balik-saran" class="menu-sub">Umpan Balik &amp; Saran</a>

   <a href="#" data-page="bab-1" class="menu-chapter">
    <span class="num">1</span> Pengenalan R &amp; Rstudio
</a>

<a href="#" data-page="bab1-1" class="menu-sub-num">
    <span class="num">1.1</span> Sejarah Singkat R
</a>

<a href="#" data-page="bab1-2" class="menu-sub-num">
    <span class="num">1.2</span> Tentang Rstudio
</a>

<a href="#" data-page="bab1-3" class="menu-sub-num">
    <span class="num">1.3</span> Instalasi R dan RStudio
</a>
    <a href="#" data-page="bab1-3-1" class="menu-sub-sub">
        <span class="num">1.3.1</span> Instalasi R
    </a>
    <a href="#" data-page="bab1-3-2" class="menu-sub-sub">
        <span class="num">1.3.2</span> Instalasi RStudio
    </a>
    <a href="#" data-page="bab1-3-3" class="menu-sub-sub">
        <span class="num">1.3.3</span> Konfigurasi Awal
    </a>

<a href="#" data-page="bab1-4" class="menu-sub-num">
    <span class="num">1.4</span> Video Instalasi R &amp; RStudio
</a>
    <a href="#" data-page="bab1-4-1" class="menu-sub-sub">
        <span class="num">1.4.1</span> Persiapan Instalasi
    </a>
    <a href="#" data-page="bab1-4-2" class="menu-sub-sub">
        <span class="num">1.4.2</span> Proses Instalasi
    </a>
    <a href="#" data-page="bab1-4-3" class="menu-sub-sub">
        <span class="num">1.4.3</span> Syarat Titik Stasioner (Maksimum/Minimum)
    </a>

<a href="#" data-page="bab1-5" class="menu-sub-num">
    <span class="num">1.5</span> Proses Penyelesaian Matematis
</a>
    <a href="#" data-page="bab1-5-1" class="menu-sub-sub">
        <span class="num">1.5.1</span> Menentukan Turunan Pertama Fungsi T(x)
    </a>
    <a href="#" data-page="bab1-5-2" class="menu-sub-sub">
        <span class="num">1.5.2</span> Menerapkan Syarat Nilai Minimum
    </a>
    <a href="#" data-page="bab1-5-3" class="menu-sub-sub">
        <span class="num">1.5.3</span> Perhitungan Nilai x Nyata
    </a>

<a href="#" data-page="bab1-6" class="menu-sub-num">
    <span class="num">1.6</span> Analisis Hasil dan Kesimpulan Studi Kasus
</a>
    <a href="#" data-page="bab1-6-1" class="menu-sub-sub">
        <span class="num">1.6.1</span> Menghitung Waktu Respon Minimum
    </a>
    <a href="#" data-page="bab1-6-2" class="menu-sub-sub">
        <span class="num">1.6.2</span> Interpretasi Grafik Fungsi Keseluruhan
    </a>
    <a href="#" data-page="bab1-6-3" class="menu-sub-sub">
        <span class="num">1.6.3</span> Rekomendasi Batas Optimal Kapasitas Server
    </a>
    <a href="#" data-page="bab1-6-4" class="menu-sub-sub">
        <span class="num">1.6.4</span> Kesimpulan Akhir Bab 1
    </a>

        <!-- BAB 2 -->
        <a href="#" data-page="bab-2" class="menu-chapter">
            <span class="num">2</span> Landasan Teori Fungsi Turunan
        </a>
        <a href="#" data-page="bab2-1" class="menu-sub-num">
            <span class="num">2.1</span> Definisi dan Aspek
        </a>
            <a href="#" data-page="bab2-1-1" class="menu-sub-sub">
                <span class="num">2.1.1</span> Definisi dan Notasi Turunan
            </a>
            <a href="#" data-page="bab2-1-2" class="menu-sub-sub">
                <span class="num">2.1.2</span> Definisi Formal Turunan
            </a>
            <a href="#" data-page="bab2-2-2" class="menu-sub-sub">
                <span class="num">2.2.2</span> Notasi Aksendan Leibniz
            </a>
            <a href="#" data-page="bab2-1-2-b" class="menu-sub-sub">
                <span class="num">2.1.2</span> Definisi Formal Turunan
            </a>
        <a href="#" data-page="bab2-2" class="menu-sub-num">
            <span class="num">2.2</span> Aturan Dasar Turunan Fungsi Aljabar
        </a>
            <a href="#" data-page="bab2-2-1" class="menu-sub-sub">
                <span class="num">2.2.1</span> Aturan Konstanta
            </a>
            <a href="#" data-page="bab2-2-2-b" class="menu-sub-sub">
                <span class="num">2.2.2</span> Aturan Fungsi Identitas
            </a>
             <a href="#" data-page="bab2-2-3" class="menu-sub-sub">
                <span class="num">2.2.3</span> Data Kualitatif
            </a>


        <a href="#" data-page="bab2-3" class="menu-sub-num">
            <span class="num">2.3</span> Populasi dan Sampel
        </a>
            <a href="#" data-page="bab2-3-1" class="menu-sub-sub">
                <span class="num">2.3.1</span> Definisi Populasi
            </a>
            <a href="#" data-page="bab2-3-2" class="menu-sub-sub">
                <span class="num">2.3.2</span> Teknik Sampling
            </a>
            <a href="#" data-page="bab2-3-3" class="menu-sub-sub">
                <span class="num">2.3.3</span> Teknik Sampling
            </a>


            
        <a href="#" data-page="bab2-4" class="menu-sub-num">
            <span class="num">2.4</span> Populasi dan Sampel
        </a>
            <a href="#" data-page="bab2-4-1" class="menu-sub-sub">
                <span class="num">2.4.1</span> Definisi Populasi
            </a>
            

        <!-- BAB 3 -->
        <a href="#" data-page="bab-3" class="menu-chapter">
            <span class="num">3</span> Statistik Deskriptif
        </a>
        <a href="#" data-page="bab3-1" class="menu-sub-num">
            <span class="num">3.1</span> Ukuran Pemusatan
        </a>
            <a href="#" data-page="bab3-1-1" class="menu-sub-sub">
                <span class="num">3.1.1</span> Mean
            </a>
            <a href="#" data-page="bab3-1-2" class="menu-sub-sub">
                <span class="num">3.1.2</span> Median
            </a>
            


        <a href="#" data-page="bab3-2" class="menu-sub-num">
            <span class="num">3.2</span> Ukuran Penyebaran
        </a>
            <a href="#" data-page="bab3-2-1" class="menu-sub-sub">
                <span class="num">3.2.1</span> Varians
            </a>
            <a href="#" data-page="bab3-2-2" class="menu-sub-sub">
                <span class="num">3.2.2</span> Standar Deviasi
            </a>
           

        <a href="#" data-page="bab3-3" class="menu-sub-num">
            <span class="num">3.3</span> Visualisasi Data
        </a>
            <a href="#" data-page="bab3-3-1" class="menu-sub-sub">
                <span class="num">3.3.1</span> Histogram
            </a>
            <a href="#" data-page="bab3-3-2" class="menu-sub-sub">
                <span class="num">3.3.2</span> Boxplot
            </a>
        
              <a href="#" data-page="bab3-4" class="menu-sub-num">
            <span class="num">3.4</span> Visualisasi Data
        </a>
            <a href="#" data-page="bab3-4-1" class="menu-sub-sub">
                <span class="num">3.4.1</span> Histogram
            </a>
            <a href="#" data-page="bab3-4-2" class="menu-sub-sub">
                <span class="num">3.4.2</span> Boxplot
            </a>
             <a href="#" data-page="bab3-4-3" class="menu-sub-sub">
                <span class="num">3.4.3</span> Boxplot
            </a>
           
        <!-- BAB 4 -->
        <a href="#" data-page="bab4" class="menu-chapter">
            <span class="num">4</span> Distribusi Probabilitas
        </a>
        <a href="#" data-page="bab4-1" class="menu-sub-num">
            <span class="num">4.1</span> Konsep Probabilitas
        </a>
          

        <a href="#" data-page="bab4-2" class="menu-sub-num">
            <span class="num">4.2</span> Konsep Probabilitas
        </a>
            <a href="#" data-page="bab4-2-1" class="menu-sub-sub">
                <span class="num">4.2.1</span> Histogram
            </a>
            <a href="#" data-page="bab4-2-2" class="menu-sub-sub">
                <span class="num">4.2.2</span> Boxplot
            </a>
             <a href="#" data-page="bab4-2-3" class="menu-sub-sub">
                <span class="num">4.2.3</span> Boxplot
            </a>


        <a href="#" data-page="bab4-3" class="menu-sub-num">
            <span class="num">4.3</span> Distribusi Lainnya
        </a>
         


        <!-- BAB 5 -->
        <a href="#" data-page="bab5" class="menu-chapter">
            <span class="num">5</span> Uji Hipotesis
        </a>
        <a href="#" data-page="bab5-1" class="menu-sub-num">
            <span class="num">5.1</span> Konsep Uji Hipotesis
        </a>
        


        <a href="#" data-page="bab5-2" class="menu-sub-num">
            <span class="num">5.2</span> Uji Satu Sampel
        </a>
            <a href="#" data-page="bab5-2-1" class="menu-sub-sub">
                <span class="num">5.2.1</span> Uji t Satu Sampel
            </a>
            <a href="#" data-page="bab5-2-2" class="menu-sub-sub">
                <span class="num">5.2.2</span> Interpretasi Hasil
            </a>
        <a href="#" data-page="bab5-3" class="menu-sub-num">
            <span class="num">5.3</span> Uji Dua Sampel
        </a>
            <a href="#" data-page="bab5-3-1" class="menu-sub-sub">
                <span class="num">5.3.1</span> Uji t Independen
            </a>
            <a href="#" data-page="bab5-3-2" class="menu-sub-sub">
                <span class="num">5.3.2</span> Uji t Berpasangan
            </a>

            <a href="#" data-page="bab5-3-3" class="menu-sub-sub">
                <span class="num">5.3.3</span> Uji t Berpasangan
            </a>
        <a href="#" data-page="bab5-4" class="menu-sub-num">
            <span class="num">5.4</span> ANOVA
        </a>
            <a href="#" data-page="bab5-4-1" class="menu-sub-sub">
                <span class="num">5.4.1</span> One-Way ANOVA
            </a>
         

    </div>

</aside>

<div class="main">
    <header class="toolbar">
        <div class="toolbar-left">
            <a href="#" class="toolbar-icon" title="Daftar Isi">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
            </a>
            <a href="#" class="toolbar-icon" title="Cari">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            </a>
            <a href="#" class="toolbar-icon" title="Ukuran Font">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 7 4 4 20 4 20 7"/><line x1="9" y1="20" x2="15" y2="20"/><line x1="12" y1="4" x2="12" y2="20"/></svg>
            </a>
            <a href="#" class="toolbar-icon" title="Edit">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
            </a>
            <a href="#" class="toolbar-icon" title="Unduh">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            </a>
            <a href="#" class="toolbar-icon" title="Info">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
            </a>
        </div>

        <div class="toolbar-title">
            <a href="{{ url('/ai') }}" class="ask-ai">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" style="vertical-align:-1px; margin-right:4px;"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                Tanya AI
            </a>
        </div>

        <div class="toolbar-right">
            <a href="#" title="Twitter">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 22.4.36a9.09 9.09 0 0 1-2.88 1.1A4.52 4.52 0 0 0 11.5 6c0 .34.03.67.1 1A4.48 4.48 0 0 1 3.4 5a4.52 4.52 0 0 0 1.4 6 4.48 4.48 0 0 1-2-.56 4.52 4.52 0 0 0 3.62 4.43 4.5 4.5 0 0 1-2 .08 4.52 4.52 0 0 0 4.22 3.14A9.06 9.06 0 0 1 1 19.54 12.8 12.8 0 0 0 7.93 21.5c8.31 0 12.86-6.9 12.86-12.86 0-.2 0-.39-.01-.58A9.22 9.22 0 0 0 23 3z"/></svg>
            </a>
            <a href="#" title="Facebook">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 1 0-11.56 9.88v-7H8v-2.88h2.44V9.84c0-2.42 1.44-3.76 3.65-3.76 1.06 0 2.17.19 2.17.19v2.39h-1.22c-1.2 0-1.58.75-1.58 1.52v1.82h2.69l-.43 2.88h-2.26v7A10 10 0 0 0 22 12z"/></svg>
            </a>
            <a href="#" title="Bagikan">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
            </a>

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
        </div>
    </header>

    <!-- ✅ .reader cuma isi konten artikel, polos tanpa tombol di dalemnya -->
    <div class="reader" id="reader">
        <div class="article" id="article-content">
            <h1 id="article-title">Memuat...</h1>
            <div id="article-content-body">
                <p>Sedang memuat konten...</p>
            </div>
        </div>
    </div>

    <!-- ✅ Tombol panah sekarang sibling dari .reader, nempel ke .main yang gak discroll -->
    <a href="#" class="page-nav-float page-nav-float-prev" id="btn-prev" aria-label="Halaman sebelumnya">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
    </a>

    <a href="#" class="page-nav-float page-nav-float-next" id="btn-next" aria-label="Halaman selanjutnya">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
    </a>
</div>

<script>
(function () {

    const KATA_PENGANTAR_SLUG = 'Kata-Pengantar-Fungsi-Turunan-Intrgral';

    const links = Array.from(document.querySelectorAll('#sidebar-menu a[data-page]'));

    const chapterLinks = Array.from(document.querySelectorAll(
        '#sidebar-menu a.menu-chapter[data-page]'
    ));

    // Slug-slug yang sebenarnya cuma anchor di dalam Kata Pengantar
    const anchorOnlySlugs = ['sasaran-pembaca', 'tentang-penulis', 'ucapan-terima-kasih', 'umpan-balik-saran'];

    function goToPage(slug) {
        fetch(`/api/content/${slug}`)
            .then(res => {
                if (!res.ok) {
                    throw new Error('Slug tidak ditemukan: ' + slug);
                }
                return res.json();
            })
            .then(data => {
                document.getElementById('article-title').innerText = data.title;
                document.getElementById('article-content-body').innerHTML = data.body;

                links.forEach(a => a.classList.remove('active'));
                const activeLink = links.find(a => a.dataset.page === slug);
                if (activeLink) activeLink.classList.add('active');

                updateNav(slug);
                document.getElementById('reader').scrollTop = 0;
            })
            .catch(err => {
                console.error(err);
                if (slug !== KATA_PENGANTAR_SLUG) {
                    goToPage(KATA_PENGANTAR_SLUG);
                }
            });
    }

    function scrollToAnchor(slug) {
        const heading = document.getElementById(slug);
        if (heading) {
            heading.scrollIntoView({ behavior: 'smooth', block: 'start' });
        } else {
            // Belum di halaman Kata Pengantar -> load dulu, baru scroll
            fetch(`/api/content/${KATA_PENGANTAR_SLUG}`)
                .then(res => res.json())
                .then(data => {
                    document.getElementById('article-title').innerText = data.title;
                    document.getElementById('article-content-body').innerHTML = data.body;
                    setTimeout(() => {
                        const h = document.getElementById(slug);
                        if (h) h.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }, 50);
                });
        }

        links.forEach(a => a.classList.remove('active'));
        const activeLink = links.find(a => a.dataset.page === slug);
        if (activeLink) activeLink.classList.add('active');
    }

    function updateNav(slug) {
        let idx = chapterLinks.findIndex(a => a.dataset.page === slug);

        if (idx === -1) {
            const allSlugs = links.map(a => a.dataset.page);
            const posInAll = allSlugs.indexOf(slug);
            for (let i = posInAll; i >= 0; i--) {
                const found = chapterLinks.findIndex(a => a.dataset.page === links[i].dataset.page);
                if (found !== -1) { idx = found; break; }
            }
        }

        const prev = document.getElementById('btn-prev');
        const next = document.getElementById('btn-next');

        prev.style.display = idx > 0 ? 'flex' : 'none';
        if (idx > 0) prev.dataset.target = chapterLinks[idx - 1].dataset.page;

        next.style.display = idx < chapterLinks.length - 1 ? 'flex' : 'none';
        if (idx < chapterLinks.length - 1) next.dataset.target = chapterLinks[idx + 1].dataset.page;
    }

    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const slug = this.dataset.page;

            if (anchorOnlySlugs.includes(slug)) {
                scrollToAnchor(slug);
            } else {
                goToPage(slug);
            }
        });
    });

    document.getElementById('btn-prev').addEventListener('click', function (e) {
        e.preventDefault();
        if (this.dataset.target) goToPage(this.dataset.target);
    });

    document.getElementById('btn-next').addEventListener('click', function (e) {
        e.preventDefault();
        if (this.dataset.target) goToPage(this.dataset.target);
    });

    
    goToPage(KATA_PENGANTAR_SLUG);

})();
</script>

</body>
</html>