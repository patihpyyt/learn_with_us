<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 28px;">

<h2 id="bab3-1">3.1 Pendahuluan</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p>Pada bab sebelumnya telah dibahas mengenai turunan yang digunakan untuk mengetahui laju perubahan suatu fungsi. Namun dalam berbagai permasalahan nyata, sering kali yang dibutuhkan bukan hanya mengetahui seberapa cepat suatu perubahan terjadi, melainkan juga mengetahui jumlah keseluruhan atau akumulasi dari perubahan tersebut. Untuk tujuan inilah konsep integral digunakan.</p>

<p>Integral merupakan salah satu konsep utama dalam kalkulus yang memiliki peran penting dalam berbagai bidang ilmu pengetahuan dan teknologi. Integral memungkinkan kita menghitung total perubahan yang terjadi secara terus-menerus dalam suatu interval tertentu. Dalam bidang teknologi informasi, integral dapat digunakan untuk menghitung total penggunaan bandwidth, total transfer data, konsumsi energi server, hingga biaya operasional sistem cloud computing.</p>

<p>Sebagai contoh, sebuah server dapat mencatat laju penggunaan data sebesar 10 GB per jam pada suatu waktu dan meningkat menjadi 20 GB per jam pada waktu berikutnya. Informasi tersebut hanya menunjukkan kecepatan penggunaan data pada saat tertentu. Untuk mengetahui total data yang digunakan selama satu hari penuh, diperlukan proses integrasi. Oleh karena itu, integral menjadi alat yang sangat penting dalam analisis sistem komputer modern.</p>

<h2 id="bab3-2" style="margin-top:50px;">3.2 Pengertian Integral</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p>Integral adalah operasi matematika yang digunakan untuk menentukan akumulasi suatu besaran yang berubah secara kontinu. Secara sederhana, integral dapat dipahami sebagai proses menjumlahkan bagian-bagian kecil yang membentuk suatu keseluruhan.</p>

<p>Integral juga dikenal sebagai anti-turunan karena merupakan kebalikan dari proses diferensiasi atau turunan. Jika turunan digunakan untuk mencari laju perubahan suatu fungsi, maka integral digunakan untuk menemukan kembali fungsi asal dari laju perubahan tersebut.</p>

<p>Sebagai ilustrasi, misalkan sebuah mobil bergerak dengan kecepatan yang berubah-ubah setiap saat. Jika diketahui fungsi kecepatan mobil, maka integral dari fungsi tersebut dapat digunakan untuk menentukan total jarak yang telah ditempuh. Konsep yang sama juga digunakan dalam bidang teknologi informasi untuk menghitung total penggunaan sumber daya sistem yang berubah dari waktu ke waktu.</p>

<h2 id="bab3-3" style="margin-top:50px;">3.3 Hubungan Integral dengan Turunan</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p>Integral dan turunan merupakan dua konsep yang saling berkaitan erat. Keduanya dapat diibaratkan sebagai operasi yang saling membalikkan satu sama lain.</p>

<p>Misalkan terdapat fungsi:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">f(x) = x³</p>

<p>Jika fungsi tersebut diturunkan, maka diperoleh:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">f'(x) = 3x²</p>

<p>Selanjutnya jika hasil turunan tersebut diintegralkan kembali:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">∫3x² dx = x³ + C</p>

<p>Hasil yang diperoleh adalah fungsi semula dengan tambahan konstanta integrasi C. Hubungan ini dijelaskan dalam <strong>Teorema Dasar Kalkulus</strong> yang menyatakan bahwa diferensiasi dan integrasi merupakan dua operasi yang saling berkebalikan. Teorema ini menjadi dasar bagi berbagai metode perhitungan yang digunakan dalam matematika, fisika, teknik, dan teknologi informasi.</p>

<h2 id="bab3-4" style="margin-top:50px;">3.4 Integral Tak Tentu</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p>Integral tak tentu adalah proses mencari fungsi asal dari suatu fungsi yang diketahui turunannya. Bentuk umum integral tak tentu adalah:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">∫f(x) dx</p>

<p>Hasil integral tak tentu selalu mengandung konstanta integrasi yang dilambangkan dengan huruf <strong>C</strong>. Konstanta ini muncul karena ketika suatu fungsi diturunkan, nilai konstanta akan hilang. Oleh karena itu, saat mengintegralkan kembali suatu fungsi, diperlukan tambahan konstanta agar seluruh kemungkinan fungsi asal dapat diwakili.</p>

<p style="font-weight: bold; font-style: italic;">Contoh — Hitung ∫4x³ dx</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">= (4x⁴)/4 + C<br>= x⁴ + C</p>
<p>Jadi: ∫4x³ dx = x⁴ + C</p>

<h2 id="bab3-5" style="margin-top:50px;">3.5 Aturan Dasar Integral</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p>Untuk mempermudah proses integrasi, terdapat beberapa aturan dasar yang harus dipahami.</p>

<ul style="margin: 0; padding-left: 20px;">
    <li style="margin-bottom: 20px;">
        <strong>1. Aturan Pangkat</strong><br>
        <p style="text-align: center; font-size: 17px; font-style: italic; margin: 8px 0;">∫xⁿ dx = x^(n+1)/(n+1) + C &nbsp;&nbsp; (n ≠ -1)</p>
        <span style="font-style: italic;">Contoh: ∫x⁴ dx = x⁵/5 + C</span>
    </li>
    <li style="margin-bottom: 20px;">
        <strong>2. Integral Konstanta</strong><br>
        <p style="text-align: center; font-size: 17px; font-style: italic; margin: 8px 0;">∫c dx = cx + C</p>
        <span style="font-style: italic;">Contoh: ∫7 dx = 7x + C</span>
    </li>
    <li style="margin-bottom: 20px;">
        <strong>3. Integral Penjumlahan dan Pengurangan</strong><br>
        <p style="text-align: center; font-size: 17px; font-style: italic; margin: 8px 0;">∫[f(x) ± g(x)] dx = ∫f(x) dx ± ∫g(x) dx</p>
        <span style="font-style: italic;">Contoh: ∫(3x² + 2x) dx = x³ + x² + C</span>
    </li>
    <li style="margin-bottom: 20px;">
        <strong>4. Integral Kelipatan Konstanta</strong><br>
        <p style="text-align: center; font-size: 17px; font-style: italic; margin: 8px 0;">∫k·f(x) dx = k∫f(x) dx</p>
        <span style="font-style: italic;">Contoh: ∫5x² dx = 5(x³/3) + C = (5x³)/3 + C</span>
    </li>
</ul>

<h2 id="bab3-6" style="margin-top:50px;">3.6 Integral Tentu</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p>Integral tentu digunakan untuk menghitung nilai akumulasi pada interval tertentu yang memiliki batas bawah dan batas atas. Bentuk umum integral tentu adalah:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">∫ₐᵇ f(x) dx</p>

<ul style="margin: 0; padding-left: 20px;">
    <li style="margin-bottom: 5px;"><strong>a</strong> = batas bawah</li>
    <li style="margin-bottom: 5px;"><strong>b</strong> = batas atas</li>
</ul>

<p style="margin-top: 12px;">Berbeda dengan integral tak tentu, hasil integral tentu berupa angka tertentu sehingga tidak memerlukan konstanta integrasi.</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">Contoh — Hitung ∫₁³ 2x dx</p>
<p>Cari integral terlebih dahulu:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">∫2x dx = x²</p>
<p>Substitusi batas:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">F(3) – F(1) = 3² – 1² = 9 – 1 = 8</p>
<p>Jadi: ∫₁³ 2x dx = <strong>8</strong></p>

<h2 id="bab3-7" style="margin-top:50px;">3.7 Penerapan Integral dalam Teknologi Informasi</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p>Integral digunakan untuk menghitung akumulasi atau total perubahan yang terjadi dalam suatu interval tertentu. Dalam teknologi informasi, integral sangat berguna untuk menghitung total penggunaan bandwidth, total transfer data, konsumsi energi server, serta berbagai kebutuhan analisis lainnya.</p>

<p>Ketika suatu sistem menghasilkan data secara terus-menerus, sering kali kita hanya mengetahui laju perubahan data tersebut. Untuk mengetahui jumlah keseluruhan data yang dihasilkan selama periode tertentu, diperlukan integral. Oleh karena itu, integral menjadi salah satu alat penting dalam pengelolaan sistem komputer modern.</p>

<h2 id="bab3-8" style="margin-top:50px;">3.8 Studi Kasus: Optimasi Resource Server MiniNetflix</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p style="font-weight: bold; font-style: italic;">A. Latar Belakang Masalah</p>
<p>Sebuah platform streaming video bernama MiniNetflix mencatat bahwa laju penggunaan data server berubah setiap jam sesuai dengan fungsi:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">D(t) = 4t² + 10 &nbsp; GB/jam</p>
<ul style="margin: 0; padding-left: 20px;">
    <li style="margin-bottom: 5px;"><strong>t</strong> = waktu (jam)</li>
    <li style="margin-bottom: 5px;"><strong>D(t)</strong> = laju penggunaan data</li>
</ul>
<p style="margin-top: 12px;">Tim IT ingin mengetahui total penggunaan data antara pukul 14.00 hingga 15.00.</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">B. Analisis Permasalahan</p>
<p>Fungsi yang diberikan merupakan laju penggunaan data, bukan total data yang digunakan. Oleh karena itu, jika ingin mengetahui total penggunaan data selama interval waktu tertentu, diperlukan proses integrasi. Integral memungkinkan kita menjumlahkan seluruh perubahan kecil yang terjadi sepanjang interval waktu sehingga diperoleh jumlah data yang sebenarnya digunakan.</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">C. Penyelesaian</p>
<p><strong>Langkah 1: Menentukan Integral Tak Tentu</strong></p>
<p style="text-align: center; font-size: 18px; font-style: italic;">∫(4t² + 10) dt = (4/3)t³ + 10t + C</p>

<p><strong>Langkah 2: Menghitung Integral Tentu (t = 2 sampai t = 3)</strong></p>
<p style="text-align: center; font-size: 18px; font-style: italic;">F(t) = (4/3)t³ + 10t</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">F(3) = (4/3)(27) + 30 = 36 + 30 = 66</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">F(2) = (4/3)(8) + 20 ≈ 10,67 + 20 = 30,67</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">F(3) – F(2) = 66 – 30,67 = <strong>35,33 GB</strong></p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">D. Interpretasi Hasil</p>
<p>Hasil perhitungan menunjukkan bahwa selama periode pukul 14.00 hingga 15.00, server menggunakan sekitar <strong>35,33 GB</strong> data. Informasi ini sangat penting bagi tim IT karena dapat digunakan untuk memperkirakan kebutuhan kapasitas penyimpanan dan bandwidth jaringan di masa mendatang.</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">E. Implementasi dalam Dunia Industri</p>
<p>Dalam perusahaan teknologi skala besar, perhitungan seperti ini dilakukan secara rutin untuk memprediksi pertumbuhan data dan menentukan kebutuhan infrastruktur. Dengan mengetahui akumulasi penggunaan data secara akurat, perusahaan dapat mengoptimalkan biaya cloud storage, mengurangi risiko kehabisan kapasitas, serta meningkatkan kualitas layanan kepada pengguna.</p>