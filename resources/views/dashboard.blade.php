<x-app-layout>
    <x-slot name="header">
<<<<<<< HEAD
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
=======
        <h2 style="font-weight: 600; font-size: 20px; color: #1f2937; line-height: 1.25;">
>>>>>>> upstream/main
            {{ __('Ruang Belajar Kalkulus') }}
        </h2>
    </x-slot>

<<<<<<< HEAD
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
=======
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
                            <div style="margin-bottom: 8px;">
                                <a href="#" style="display: block; padding: 8px 12px; border-radius: 6px; font-size: 14px; font-weight: 600; background-color: #eef2ff; color: #4338ca; border-left: 4px solid #6366f1; text-decoration: none;">Kata Pengantar</a>
                                <div style="padding-left: 16px; margin-top: 4px; display: flex; flex-direction: column; gap: 4px;">
                                    <a href="#" style="display: block; padding: 6px 12px; font-size: 12px; color: #4b5563; text-decoration: none; border-radius: 4px;">Sasaran Pembaca</a>
                                    <a href="#" style="display: block; padding: 6px 12px; font-size: 12px; color: #4b5563; text-decoration: none; border-radius: 4px;">Tentang Penulis</a>
                                    <a href="#" style="display: block; padding: 6px 12px; font-size: 12px; color: #4b5563; text-decoration: none; border-radius: 4px;">Ucapan Terima Kasih</a>
                                    <a href="#" style="display: block; padding: 6px 12px; font-size: 12px; color: #4b5563; text-decoration: none; border-radius: 4px;">Umpan Balik &amp; Saran</a>
                                </div>
                            </div>

                            <hr style="margin-top: 12px; margin-bottom: 12px; border: 0; border-top: 1px solid #e5e7eb;">

                            <div style="margin-bottom: 8px;">
                                <a href="#" style="display: block; padding: 8px 12px; font-size: 15px; font-weight: bold; color: #111827; text-decoration: none; border-radius: 6px;">
                                    <span style="display: inline-block; width: 20px; color: #4f46e5; font-weight: bold;">1</span> Pengenalan R &amp; Rstudio
                                </a>
                                <div style="padding-left: 16px; margin-top: 4px; display: flex; flex-direction: column; gap: 4px; border-left: 1px solid #e5e7eb; margin-left: 20px;">
                                    <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">1.1</span> Sejarah Singkat R</a>
                                    <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">1.2</span> Tentang Rstudio</a>
                                    
                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; font-weight: 500; color: #374151; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">1.3</span> Instalasi R dan RStudio</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">1.3.1 Instalasi R</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">1.3.2 Instalasi RStudio</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">1.3.3 Konfigurasi Awal</a>
                                        </div>
                                    </div>

                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; font-weight: 500; color: #374151; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">1.4</span> Video Instalasi R &amp; RStudio</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">1.4.1 Persiapan Instalasi</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">1.4.2 Proses Instalasi</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">1.4.3 Syarat Titik Stasioner</a>
                                        </div>
                                    </div>

                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; font-weight: 500; color: #374151; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">1.5</span> Proses Penyelesaian Matematis</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">1.5.1 Menentukan Turunan Pertama Fungsi T(x)</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">1.5.2 Menerapkan Syarat Nilai Minimum</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">1.5.3 Perhitungan Nilai x Nyata</a>
                                        </div>
                                    </div>

                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; font-weight: 500; color: #374151; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">1.6</span> Analisis Hasil &amp; Kesimpulan</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">1.6.1 Menghitung Waktu Respon Minimum</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">1.6.2 Interpretasi Grafik Fungsi Keseluruhan</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">1.6.3 Rekomendasi Batas Optimal Server</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">1.6.4 Kesimpulan Akhir Bab 1</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr style="margin-top: 12px; margin-bottom: 12px; border: 0; border-top: 1px solid #e5e7eb;">

                            <div style="margin-bottom: 8px;">
                                <a href="#" style="display: block; padding: 8px 12px; font-size: 14px; font-weight: bold; color: #111827; text-decoration: none; border-radius: 6px;">
                                    <span style="display: inline-block; width: 20px; color: #4f46e5; font-weight: bold;">2</span> Landasan Teori Fungsi Turunan
                                </a>
                                <div style="padding-left: 16px; margin-top: 4px; display: flex; flex-direction: column; gap: 4px; border-left: 1px solid #e5e7eb; margin-left: 20px;">
                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">2.1</span> Definisi dan Aspek</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">2.1.1 Definisi &amp; Notasi Turunan</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">2.1.2 Definisi Formal Turunan</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">2.1.3 Notasi Aksen dan Leibniz</a>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">2.2</span> Aturan Dasar Turunan Fungsi Aljabar</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">2.2.1 Aturan Konstanta</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">2.2.2 Aturan Fungsi Identitas</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">2.2.3 Data Kualitatif</a>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">2.3</span> Populasi dan Sampel</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">2.3.1 Definisi Populasi</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">2.3.2 Teknik Sampling</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">2.3.3 Logika Validasi Sampel</a>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">2.4</span> Ruang Lingkup Materi</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">2.4.1 Keterbatasan Teori</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr style="margin-top: 12px; margin-bottom: 12px; border: 0; border-top: 1px solid #e5e7eb;">

                            <div style="margin-bottom: 8px;">
                                <a href="#" style="display: block; padding: 8px 12px; font-size: 14px; font-weight: bold; color: #111827; text-decoration: none; border-radius: 6px;">
                                    <span style="display: inline-block; width: 20px; color: #4f46e5; font-weight: bold;">3</span> Statistik Deskriptif
                                </a>
                                <div style="padding-left: 16px; margin-top: 4px; display: flex; flex-direction: column; gap: 4px; border-left: 1px solid #e5e7eb; margin-left: 20px;">
                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">3.1</span> Ukuran Pemusatan</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">3.1.1 Mean</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">3.1.2 Median</a>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">3.2</span> Ukuran Penyebaran</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">3.2.1 Varians</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">3.2.2 Standar Deviasi</a>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">3.3</span> Visualisasi Data I</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">3.3.1 Histogram</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">3.3.2 Boxplot</a>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">3.4</span> Visualisasi Data II</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">3.4.1 Advanced Histogram</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">3.4.2 Density Plot</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">3.4.3 Scatter Plot</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr style="margin-top: 12px; margin-bottom: 12px; border: 0; border-top: 1px solid #e5e7eb;">

                            <div style="margin-bottom: 8px;">
                                <a href="#" style="display: block; padding: 8px 12px; font-size: 14px; font-weight: bold; color: #111827; text-decoration: none; border-radius: 6px;">
                                    <span style="display: inline-block; width: 20px; color: #4f46e5; font-weight: bold;">4</span> Distribusi Probabilitas
                                </a>
                                <div style="padding-left: 16px; margin-top: 4px; display: flex; flex-direction: column; gap: 4px; border-left: 1px solid #e5e7eb; margin-left: 20px;">
                                    <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">4.1</span> Konsep Probabilitas Dasar</a>
                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">4.2</span> Distribusi Kontinu</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">4.2.1 Kurva Normal</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">4.2.2 Nilai Z-Score</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">4.2.3 Nilai Probabilitas</a>
                                        </div>
                                    </div>
                                    <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">4.3</span> Distribusi Lainnya</a>
                                </div>
                            </div>

                            <hr style="margin-top: 12px; margin-bottom: 12px; border: 0; border-top: 1px solid #e5e7eb;">

                            <div style="margin-bottom: 8px;">
                                <a href="#" style="display: block; padding: 8px 12px; font-size: 14px; font-weight: bold; color: #111827; text-decoration: none; border-radius: 6px;">
                                    <span style="display: inline-block; width: 20px; color: #4f46e5; font-weight: bold;">5</span> Uji Hipotesis
                                </a>
                                <div style="padding-left: 16px; margin-top: 4px; display: flex; flex-direction: column; gap: 4px; border-left: 1px solid #e5e7eb; margin-left: 20px;">
                                    <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">5.1</span> Konsep Uji Hipotesis</a>
                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">5.2</span> Uji Satu Sampel</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">5.2.1 Uji t Satu Sampel</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">5.2.2 Interpretasi Hasil</a>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">5.3</span> Uji Dua Sampel</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">5.3.1 Uji t Independen</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">5.3.2 Uji t Berpasangan</a>
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">5.3.3 Signifikansi Hasil</a>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" style="display: block; padding: 4px 12px; font-size: 13px; color: #4b5563; text-decoration: none;"><span style="color: #9ca3af; margin-right: 4px;">5.4</span> ANOVA</a>
                                        <div style="padding-left: 16px; margin-top: 2px; display: flex; flex-direction: column; gap: 2px; border-left: 1px solid #e0e7ff; margin-left: 12px;">
                                            <a href="#" style="display: block; padding: 2px 8px; font-size: 11px; color: #6b7280; text-decoration: none;">5.4.1 One-Way ANOVA</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
>>>>>>> upstream/main
                        @endforelse
                    </nav>
                </div>

<<<<<<< HEAD
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
=======
                <div style="width: 75%; padding: 32px; background-color: #ffffff;">
                    @if($currentChapter)
                        <article>
                            <h1 style="font-size: 30px; font-weight: 800; color: #111827; border-bottom: 1px solid #e5e7eb; padding-bottom: 16px; margin-bottom: 24px;">
                                {{ $currentChapter->title }}
                            </h1>
                            <div style="color: #1f2937; line-height: 1.625; font-size: 16px;">
                                {!! Illuminate\Support\Str::markdown($currentChapter->content) !!}
                            </div>
                        </article>

                        <div style="margin-top: 48px; padding: 24px; background-color: #f5f3ff; border-radius: 12px; border: 1px solid #e0e7ff;">
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                                <div style="padding: 8px; background-color: #4f46e5; border-radius: 8px; color: #ffffff; display: flex; align-items: center;">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 style="font-weight: bold; color: #1e1b4b; font-size: 16px; margin: 0;">Asisten Kalkulus AI</h4>
                                    <p style="font-size: 12px; color: #4338ca; margin: 2px 0 0 0;">Tanyakan apapun tentang rumus atau konsep pada bab ini.</p>
                                </div>
                            </div>

                            <div id="chat-box" style="display: flex; flex-direction: column; gap: 16px; max-height: 240px; overflow-y: auto; margin-bottom: 16px; padding: 12px; background-color: #ffffff; border-radius: 8px; border: 1px solid #f3f4f6; display: none;"></div>

                            <div style="display: flex; align-items: center; gap: 8px;">
                                <input type="text" id="user-query" placeholder="Ketik pertanyaan kamu di sini..." 
                                    style="flex: 1; padding: 8px 12px; border-radius: 8px; border: 1px solid #d1d5db; font-size: 14px;">
                                <button onclick="sendQuestion()" id="send-btn" style="background-color: #4f46e5; color: #ffffff; padding: 8px 16px; border-radius: 8px; font-size: 14px; font-weight: 600; border: none; cursor: pointer;">
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

                            chatBox.style.display = 'flex';
                            chatBox.innerHTML += `
                                <div style="align-self: flex-end;">
                                    <span style="display: inline-block; background-color: #e0e7ff; color: #1e1b4b; border-radius: 8px; padding: 8px 12px; font-size: 14px; text-align: left;">${query}</span>
                                </div>
                            `;
                            
                            const loadingId = 'loading-' + Date.now();
                            chatBox.innerHTML += `
                                <div style="align-self: flex-start;" id="${loadingId}">
                                    <span style="display: inline-block; background-color: #f3f4f6; color: #6b7280; border-radius: 8px; padding: 8px 12px; font-size: 14px; font-style: italic;">Sedang berpikir...</span>
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
                                    <div style="align-self: flex-start;">
                                        <div style="display: inline-block; background-color: #f3f4f6; color: #1f2937; border-radius: 8px; padding: 8px 12px; font-size: 14px;">
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
                    @else
                        <div style="text-align: center; padding: 64px 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 64px; height: 64px; margin-left: auto; margin-right: auto; margin-bottom: 16px; color: #d1d5db;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            <h3 style="font-size: 20px; font-weight: bold; color: #374151; margin-bottom: 8px;">Materi Belum Tersedia</h3>
                            <p style="color: #6b7280; font-size: 14px; max-width: 384px; margin-left: auto; margin-right: auto;">Silakan tambahkan data materi kalkulus / statistika kamu ke tabel database lewat phpMyAdmin terlebih dahulu.</p>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
>>>>>>> upstream/main
</x-app-layout>