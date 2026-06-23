
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 28px;">

<p>Kalkulus adalah salah satu cabang matematika yang berperan penting dalam perkembangan teknologi modern. Melalui konsep turunan dan integral, berbagai persoalan di dunia teknologi informasi—mulai dari optimasi performa sistem hingga analisis data dalam skala besar—dapat diselesaikan secara matematis dan terukur.</p>

<p>Bab ini membahas latar belakang pentingnya kalkulus dalam dunia IT, tujuan pembelajaran yang ingin dicapai, manfaat yang dapat diperoleh pembaca, serta sebuah studi kasus nyata mengenai penerapan turunan dalam optimasi waktu respon server.</p>

<h2 id="latar">1.1 Latar Belakang</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p>Perkembangan teknologi informasi saat ini menuntut sistem komputer bekerja secara cepat, efisien, dan mampu menangani jutaan data setiap detiknya. Untuk mencapai tujuan tersebut diperlukan berbagai metode analisis yang dapat membantu memahami perilaku sistem secara matematis.</p>

<p>Kalkulus merupakan salah satu alat matematika yang banyak digunakan dalam pengembangan teknologi modern. Melalui konsep turunan, seorang engineer dapat mengetahui bagaimana perubahan suatu variabel memengaruhi performa sistem. Sementara itu, integral digunakan untuk menghitung total akumulasi suatu proses yang berlangsung secara kontinu.</p>

<p>Dalam dunia teknologi informasi, kalkulus digunakan pada berbagai bidang seperti optimasi performa server, analisis jaringan komputer, kecerdasan buatan (Artificial Intelligence), pengolahan citra digital, data science, machine learning, cloud computing, serta simulasi sistem. Oleh karena itu, pemahaman terhadap kalkulus menjadi bekal penting bagi mahasiswa teknologi informasi dalam menghadapi tantangan dunia kerja dan perkembangan teknologi yang semakin pesat.</p>

<h2 id="bab1-2">1.2 Tujuan Pembelajaran</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p>Setelah mempelajari buku ini, pembaca diharapkan mampu:</p>

<ul>
    <li>Memahami konsep dasar turunan.</li>
    <li>Memahami konsep dasar integral.</li>
    <li>Menyelesaikan masalah optimasi menggunakan turunan.</li>
    <li>Menghitung akumulasi menggunakan integral.</li>
    <li>Mengaplikasikan kalkulus pada bidang teknologi informasi.</li>
</ul>

<h2 id="bab1-3">1.3 Manfaat Pembelajaran</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<ul>
    <li>Membantu mahasiswa memahami kalkulus secara praktis.</li>
    <li>Menunjukkan penerapan matematika dalam dunia IT.</li>
    <li>Melatih kemampuan analisis dan pemecahan masalah.</li>
</ul>

<h2 id="bab1-4">1.4 Studi Kasus: Optimasi Waktu Respon Server</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p>Untuk memahami bagaimana turunan diterapkan secara nyata, berikut disajikan sebuah studi kasus sederhana mengenai optimasi waktu respon server berdasarkan jumlah request yang diterima per detik.</p>

<h3 id="bab1-4-1">1.4.1 Permasalahan</h3>

<p>Sebuah server memiliki waktu respon <em>T(x)</em> (dalam milidetik) yang dipengaruhi oleh jumlah request <em>x</em> yang diterima setiap detiknya. Hubungan antara waktu respon dan jumlah request dimodelkan dengan fungsi berikut:</p>

<p style="text-align: center; font-size: 18px; font-style: italic;">T(x) = 0.05x² - 3x + 80</p>

<p>Pihak pengelola sistem ingin mengetahui pada jumlah request berapa server memberikan waktu respon paling minimum, agar kapasitas server dapat dialokasikan secara optimal.</p>

<h3 id="bab1-4-2">1.4.2 Menentukan Turunan Pertama Fungsi T(x)</h3>

<p>Untuk mencari titik minimum dari fungsi T(x), langkah pertama adalah mencari turunan pertamanya:</p>

<p style="text-align: center; font-size: 18px; font-style: italic;">T'(x) = 0.1x - 3</p>

<h3 id="bab1-4-3">1.4.3 Menerapkan Syarat Titik Stasioner</h3>

<p>Titik minimum suatu fungsi terjadi ketika turunan pertamanya sama dengan nol (T'(x) = 0). Syarat ini digunakan untuk menentukan nilai x yang membuat waktu respon berada pada titik paling rendah:</p>

<p style="text-align: center; font-size: 18px; font-style: italic;">0.1x - 3 = 0</p>

<h3 id="bab1-4-4">1.4.4 Perhitungan Nilai x</h3>

<p>Dengan menyelesaikan persamaan di atas:</p>

<p style="text-align: center; font-size: 18px; font-style: italic;">0.1x = 3<br>x = 30</p>

<p>Artinya, waktu respon server berada pada titik minimum ketika server menerima <strong>30 request per detik</strong>.</p>

<h3 id="bab1-4-5">1.4.5 Menghitung Waktu Respon Minimum</h3>

<p>Nilai x = 30 kemudian disubstitusikan kembali ke fungsi T(x) untuk mengetahui besar waktu respon minimumnya:</p>

<p style="text-align: center; font-size: 18px; font-style: italic;">T(30) = 0.05(30)² - 3(30) + 80<br>T(30) = 45 - 90 + 80<br>T(30) = 35</p>

<p>Sehingga waktu respon minimum server adalah <strong>35 milidetik</strong>, yang dicapai pada saat server menerima 30 request per detik.</p>

<h3 id="bab1-4-6">1.4.6 Interpretasi Grafik Fungsi</h3>

<p>Secara grafik, fungsi T(x) = 0.05x² - 3x + 80 berbentuk parabola terbuka ke atas, karena koefisien x² bernilai positif. Titik (30, 35) merupakan titik puncak (vertex) dari parabola tersebut, yang menunjukkan nilai minimum dari fungsi.</p>

<p>Sebelum mencapai titik x = 30, waktu respon server cenderung menurun seiring bertambahnya jumlah request. Namun setelah melewati titik tersebut, waktu respon justru kembali meningkat. Hal ini menunjukkan bahwa terlalu sedikit maupun terlalu banyak request dapat memengaruhi efisiensi waktu respon server.</p>

<h3 id="bab1-4-7">1.4.7 Rekomendasi Batas Optimal Kapasitas Server</h3>

<p>Berdasarkan hasil analisis, pengelola sistem disarankan untuk menjaga beban server pada kisaran mendekati 30 request per detik agar performa server tetap berada pada kondisi optimal. Apabila jumlah request diperkirakan akan melebihi batas tersebut secara konsisten, perlu dipertimbangkan langkah-langkah seperti penambahan kapasitas server (scaling) atau optimasi proses agar waktu respon tetap terjaga.</p>

<h3 id="bab1-4-8">1.4.8 Kesimpulan Studi Kasus</h3>

<p>Studi kasus ini menunjukkan bagaimana konsep turunan dalam kalkulus dapat diterapkan secara langsung untuk menyelesaikan permasalahan nyata di bidang teknologi informasi, khususnya dalam menentukan titik optimal sebuah sistem. Dengan memahami titik minimum suatu fungsi, pengelola sistem dapat mengambil keputusan yang lebih tepat dalam mengelola kapasitas dan performa server.</p>