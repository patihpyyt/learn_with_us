<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 28px;">

<h2 id="bab2-1">2.1 Pengertian Turunan</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p>Turunan merupakan salah satu konsep dasar dalam kalkulus yang digunakan untuk mengukur laju perubahan suatu besaran terhadap besaran lainnya. Dalam kehidupan sehari-hari, perubahan sering terjadi secara terus-menerus, seperti perubahan kecepatan kendaraan, pertumbuhan jumlah pengguna aplikasi, maupun perubahan penggunaan sumber daya komputer.</p>

<p>Secara matematis, turunan menunjukkan kemiringan suatu kurva pada titik tertentu. Jika nilai turunan bernilai positif, maka fungsi sedang mengalami kenaikan. Sebaliknya, jika nilai turunan bernilai negatif, fungsi sedang mengalami penurunan.</p>

<h2 id="bab2-2">2.2 Penerapan Turunan dalam Teknologi Informasi</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p>Turunan digunakan untuk membantu analisis performa sistem, optimisasi proses, dan pengambilan keputusan matematis dalam bidang teknologi informasi.</p>

<p style="font-weight: bold; font-style: italic;">Turunan digunakan untuk:</p>

<ul style="margin: 0; padding-left: 20px;">
    <li style="margin-bottom: 5px;">Mengukur laju perubahan waktu respon server</li>
    <li style="margin-bottom: 5px;">Optimisasi performa sistem</li>
    <li style="margin-bottom: 5px;">Menentukan nilai maksimum dan minimum</li>
    <li style="margin-bottom: 5px;">Evaluasi efisiensi resource</li>
</ul>

<h2 id="bab2-3" style="margin-top:50px;">2.3 Evaluasi Matematis &amp; Implikasi Sistem</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p style="font-weight: bold; font-style: italic;">Makna nilai turunan T'(x) terhadap kondisi sistem:</p>
<ul style="margin: 0; padding-left: 20px;">
    <li style="margin-bottom: 5px;">Nilai Negatif T'(x) &lt; 0: Fase efisiensi meningkat. Waktu respon masih terus menurun (semakin cepat) meskipun beban permintaan bertambah.</li>
    <li style="margin-bottom: 5px;">Nilai Positif T'(x) &gt; 0: Fase degradasi performa. Waktu respon mulai membengkak karena sistem mulai kewalahan menangani antrean permintaan.</li>
    <li style="margin-bottom: 5px;">Nilai Nol T'(x) = 0: Titik keseimbangan sempurna atau kinerja optimal.</li>
</ul>
<br>
<p style="font-weight: bold; font-style: italic;">Implikasi terhadap Pengelolaan Beban (Software Management):</p>
<ul style="margin: 0; padding-left: 20px;">
    <li style="margin-bottom: 5px;">Auto-Scaling: Sistem dikonfigurasi untuk menambah sumber daya jika beban mendekati atau melewati titik optimal.</li>
    <li style="margin-bottom: 5px;">Load Balancing: Strategi distribusi beban memastikan tidak ada node yang dipaksa bekerja di atas titik optimalnya.</li>
    <li style="margin-bottom: 5px;">Efisiensi Biaya: Dengan mengetahui titik optimal, perusahaan tidak perlu membuang biaya untuk infrastruktur berlebih.</li>
</ul>

<h2 id="bab2-4" style="margin-top:50px;">2.4 Studi Kasus: Optimasi Waktu Respon Server</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p style="font-weight: bold; font-style: italic;">A. Latar Belakang Masalah</p>
<p>Sebuah perusahaan penyedia layanan web ingin meningkatkan performa server. Waktu respon server dimodelkan dengan fungsi:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">T(x) = 0,02x² – 1,2x + 40</p>
<ul style="margin: 0; padding-left: 20px;">
    <li style="margin-bottom: 5px;"><strong>x</strong> = jumlah request per detik</li>
    <li style="margin-bottom: 5px;"><strong>T(x)</strong> = waktu respon server (milidetik)</li>
</ul>
<p style="margin-top: 12px;"><strong>Tujuan:</strong> Menentukan jumlah request optimal agar waktu respon minimum dan sistem tetap efisien.</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">B. Analisis Permasalahan</p>
<p>Jika jumlah request terlalu sedikit, sumber daya server belum dimanfaatkan secara maksimal. Sebaliknya, jika terlalu banyak, server mengalami antrean proses sehingga waktu respon meningkat. Oleh karena itu, diperlukan jumlah request yang optimal.</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">C. Penyelesaian Menggunakan Turunan</p>
<p><strong>Langkah 1: Menentukan Turunan Pertama</strong></p>
<p style="text-align: center; font-size: 18px; font-style: italic;">T'(x) = 0,04x – 1,2</p>

<p><strong>Langkah 2: Menentukan Titik Kritis (T'(x) = 0)</strong></p>
<p style="text-align: center; font-size: 18px; font-style: italic;">0,04x – 1,2 = 0<br>0,04x = 1,2<br>x = 30</p>

<p><strong>Langkah 3: Uji Turunan Kedua</strong></p>
<p style="text-align: center; font-size: 18px; font-style: italic;">T''(x) = 0,04 &gt; 0 → Titik Minimum ✓</p>

<p><strong>Langkah 4: Menentukan Waktu Respon Minimum</strong></p>
<p style="text-align: center; font-size: 18px; font-style: italic;">T(30) = 0,02(30)² – 1,2(30) + 40<br>T(30) = 18 – 36 + 40<br>T(30) = 22 milidetik</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">D. Interpretasi Hasil</p>
<p>Waktu respon minimum terjadi ketika server menerima <strong>30 request per detik</strong>, dengan waktu respon sebesar <strong>22 milidetik</strong>. Jika jumlah request melebihi angka tersebut, waktu respon akan mulai bertambah sehingga pengguna merasakan penurunan performa.</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">E. Implementasi dalam Dunia Industri</p>
<p>Hasil analisis ini dapat digunakan oleh tim DevOps untuk menentukan kapasitas server, pengaturan load balancing, dan auto-scaling agar server tetap bekerja pada kondisi optimal.</p>

<h2 id="bab2-5" style="margin-top:50px;">2.5 Studi Kasus: Optimasi Performa Perusahaan SaaS</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p style="font-weight: bold; font-style: italic;">A. Latar Belakang</p>
<p>Sebuah perusahaan Software as a Service (SaaS) ingin mengoptimalkan performa server dengan menganalisis hubungan antara jumlah pengguna aktif dan waktu respon sistem. Fungsi waktu respon dimodelkan sebagai:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">R(u) = 0,001u² – 0,12u + 25</p>
<ul style="margin: 0; padding-left: 20px;">
    <li style="margin-bottom: 5px;"><strong>u</strong> = jumlah pengguna aktif per menit</li>
    <li style="margin-bottom: 5px;"><strong>R(u)</strong> = waktu respon rata-rata server (ms)</li>
</ul>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">B. Penyelesaian</p>
<p><strong>Turunan pertama:</strong></p>
<p style="text-align: center; font-size: 18px; font-style: italic;">R'(u) = 0,002u – 0,12</p>

<p><strong>Titik kritis (R'(u) = 0):</strong></p>
<p style="text-align: center; font-size: 18px; font-style: italic;">0,002u = 0,12 → u = 60</p>

<p><strong>Turunan kedua:</strong></p>
<p style="text-align: center; font-size: 18px; font-style: italic;">R''(u) = 0,002 &gt; 0 → Titik Minimum ✓</p>

<p><strong>Substitusi u = 60:</strong></p>
<p style="text-align: center; font-size: 18px; font-style: italic;">R(60) = 0,001(60)² – 0,12(60) + 25<br>R(60) = 3,6 – 7,2 + 25<br>R(60) = 21,4 ms</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">C. Interpretasi</p>
<p>Sistem mencapai performa terbaik ketika terdapat <strong>60 pengguna aktif per menit</strong> dengan waktu respon <strong>21,4 ms</strong>. Jika melebihi angka tersebut, diperlukan strategi tambahan seperti load balancing atau penambahan kapasitas server.</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">D. Analisis Laju Perubahan pada Beban Tertentu</p>
<p>Contoh: Berapa laju perubahan waktu respon saat sistem memiliki 40 pengguna aktif?</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">R'(40) = 0,002(40) – 0,12 = 0,08 – 0,12 = –0,04</p>
<p>Nilai <strong>–0,04</strong> menunjukkan bahwa waktu respon masih mengalami penurunan. Sistem sangat aman untuk terus ditambah beban hingga mencapai titik optimal.</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">E. Keputusan Teknis Tim DevOps</p>
<p>Jika jumlah pengguna melebihi 60 per menit, tim DevOps disarankan untuk mengambil langkah-langkah berikut:</p>
<ul style="margin: 0; padding-left: 20px;">
    <li style="margin-bottom: 5px;">Lakukan load balancing</li>
    <li style="margin-bottom: 5px;">Tambah kapasitas server</li>
    <li style="margin-bottom: 5px;">Gunakan auto scaling</li>
    <li style="margin-bottom: 5px;">Optimasi database dan cache</li>
</ul>