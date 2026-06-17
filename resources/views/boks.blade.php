<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title }}</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<<<<<<< HEAD
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
=======
<link href="https://fonts.googleapis.com/css2?family=Inter:wght=400;500;600;700&family=Playfair+Display:wght=600;700&family=Source+Serif+4:ital,opsz,wght=0,8..60,300;0,8..60,400;1,8..60,300&display=swap" rel="stylesheet">
>>>>>>> upstream/main

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
<<<<<<< HEAD
    background: #ffffff;
=======
    background: #f5f2ed;
>>>>>>> upstream/main
}

/* ─── SIDEBAR ─── */
.sidebar {
<<<<<<< HEAD
    width: 300px;
    background: #2c4a6e;
=======
    width: 320px;
    background: #0f1923;
>>>>>>> upstream/main
    color: white;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    height: 100vh;
<<<<<<< HEAD
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

.authors-list {
    text-align: center;
    padding: 0 16px 20px;
}

.authors-list .author-item {
    font-size: 12.5px;
    line-height: 1.5;
    color: #e8edf2;
    margin-bottom: 8px;
}

.authors-list .author-item .author-name {
    font-weight: 600;
    color: #ffffff;
    display: block;
}

.authors-list .author-item .author-nim {
    font-weight: 400;
    font-size: 11.5px;
    color: #b9c7d4;
    display: block;
}

.menu {
    padding: 0 0 24px;
=======
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
>>>>>>> upstream/main
}

.menu a {
    display: block;
<<<<<<< HEAD
    color: #e8edf2;
    text-decoration: none;
    font-family: 'Inter', Arial, sans-serif;
    line-height: 1.4;
=======
    color: white;
    text-decoration: none;
    font-family: 'Inter', Arial, sans-serif;
    line-height: 1.4;
    border-radius: 8px;
>>>>>>> upstream/main
    transition: background .15s, color .15s;
}

.menu a:hover {
<<<<<<< HEAD
    background: rgba(255,255,255,0.08);
    color: #ffffff;
=======
    background: rgba(74,158,218,0.08);
    color: #a8d4f0;
>>>>>>> upstream/main
}

.menu-chapter {
    font-weight: 700;
<<<<<<< HEAD
    font-size: 15px;
    padding: 11px 24px;
    color: #ffffff;
    display: flex;
    align-items: center;
    gap: 6px;
}

.menu-chapter .num {
    font-weight: 700;
=======
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
>>>>>>> upstream/main
}

.menu-sub {
    font-weight: 400;
<<<<<<< HEAD
    font-size: 14px;
    padding: 11px 24px 11px 40px;
    color: #e8edf2;
}

.menu-sub-num {
    font-weight: 600;
    font-size: 14px;
    padding: 11px 24px 11px 40px;
    color: #ffffff;
}

.menu-sub-num .num {
    font-weight: 600;
    margin-right: 4px;
}

.menu a.active {
    background: #6b7f93;
    color: #ffffff;
    font-weight: 600;
=======
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
>>>>>>> upstream/main
}

.menu-sub-sub {
    font-weight: 400;
<<<<<<< HEAD
    font-size: 13.5px;
    padding: 10px 24px 10px 60px;
    color: #d7dee5;
}

.menu-sub-sub .num {
    font-weight: 500;
=======
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
>>>>>>> upstream/main
    margin-right: 4px;
}

.menu-sub-sub:hover {
<<<<<<< HEAD
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
=======
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
>>>>>>> upstream/main
}

/* ─── MAIN CONTENT ─── */
.main {
    flex: 1;
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.toolbar {
<<<<<<< HEAD
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
=======
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
>>>>>>> upstream/main
    border-radius: 6px;
    transition: all 0.2s;
}

<<<<<<< HEAD
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
=======
.toolbar-title a:hover {
    background: #4a9eda;
    color: #fff;
}

.auth-buttons {
    display: flex;
    gap: 12px;
    align-items: center;
>>>>>>> upstream/main
}

.btn-auth {
    font-family: 'Inter', sans-serif;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
<<<<<<< HEAD
    padding: 7px 16px;
=======
    padding: 8px 18px;
>>>>>>> upstream/main
    border-radius: 6px;
    transition: all 0.2s ease;
}

.btn-login {
<<<<<<< HEAD
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
=======
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
>>>>>>> upstream/main
}

.reader {
    flex: 1;
    overflow-y: auto;
<<<<<<< HEAD
    background: #ffffff;
}

.reader::-webkit-scrollbar { width: 8px; }
.reader::-webkit-scrollbar-track { background: #f5f5f5; }
.reader::-webkit-scrollbar-thumb { background: #d0d5dd; border-radius: 4px; }

.article {
    max-width: 880px;
    margin: auto;
    padding: 56px 64px 96px;
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
=======
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
>>>>>>> upstream/main
</style>
</head>
<body>

<aside class="sidebar">
    <div class="logo">
        <img src="https://placehold.co/140x140" alt="logo">
    </div>

<<<<<<< HEAD
    <div class="authors-list">
        <div class="author-item">
            <span class="author-name">Abimanya</span>
            <span class="author-nim">10625</span>
        </div>
        <div class="author-item">
            <span class="author-name">Baharu M.</span>
            <span class="author-nim">10625</span>
        </div>
        <div class="author-item">
            <span class="author-name">Risky Alfarezy</span>
            <span class="author-nim">10625</span>
        </div>
        <div class="author-item">
            <span class="author-name">M. Iqbal Putih</span>
            <span class="author-nim">10625</span>
        </div>
    </div>

    <div class="menu">
    @auth
        <div class="menu-history-title">
            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" style="vertical-align:-1px; margin-right:5px;"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
            Riwayat Chat Kamu
        </div>

        @forelse($riwayat as $chat)
            <a href="{{ url('/ai?chat_id=' . $chat->id) }}" class="menu-history-item" title="{{ $chat->input_data }}">
                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" style="flex-shrink:0;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>{{ Str::limit($chat->input_data, 22) }}</span>
            </a>
        @empty
            <p style="font-size: 11px; color: #9fb3c4; padding: 8px 24px; font-style: italic;">Belum ada obrolan.</p>
        @endforelse

        <hr style="border: 0; border-top: 1px solid rgba(255,255,255,0.1); margin: 12px 24px 6px;">
=======
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
>>>>>>> upstream/main
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
<<<<<<< HEAD
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
=======
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
>>>>>>> upstream/main
        </div>
    </header>

    <div class="reader">
        <div class="article">
            <h1>Bab 2 Konsep Dasar Statistik</h1>
            <h2>2.1 Definisi dan Aspek</h2>
            <p>Isi materi nanti taruh di sini.</p>
<<<<<<< HEAD

=======
            
>>>>>>> upstream/main
            </div>
    </div>
</div>

</body>
</html>