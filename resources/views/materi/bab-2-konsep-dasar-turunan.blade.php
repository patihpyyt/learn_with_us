<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 28px;">

<h2 id="bab2-1">2.1 Pengertian Turunan</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p>Turunan merupakan salah satu konsep dasar dalam kalkulus yang digunakan untuk mengukur laju perubahan suatu besaran terhadap besaran lainnya. Dalam kehidupan sehari-hari, perubahan sering terjadi secara terus-menerus, seperti perubahan kecepatan kendaraan, pertumbuhan jumlah pengguna aplikasi, maupun perubahan penggunaan sumber daya komputer. Melalui turunan, perubahan-perubahan tersebut dapat dianalisis secara matematis sehingga menghasilkan informasi yang lebih akurat dan terukur.</p>

<p>Dalam bidang teknologi informasi, konsep turunan memiliki peranan yang sangat penting. Seorang pengembang sistem dapat menggunakan turunan untuk mengetahui bagaimana perubahan jumlah pengguna memengaruhi performa server, bagaimana penggunaan memori berubah seiring waktu, atau bagaimana kecepatan transfer data dipengaruhi oleh beban jaringan. Dengan memahami laju perubahan tersebut, pengelola sistem dapat mengambil keputusan yang tepat untuk meningkatkan efisiensi dan stabilitas layanan.</p>

<p>Secara matematis, turunan menunjukkan kemiringan suatu kurva pada titik tertentu. Jika nilai turunan bernilai positif, maka fungsi sedang mengalami kenaikan. Sebaliknya, jika nilai turunan bernilai negatif, fungsi sedang mengalami penurunan. Konsep inilah yang kemudian menjadi dasar dalam berbagai metode optimasi yang banyak digunakan dalam pengembangan perangkat lunak, kecerdasan buatan, dan analisis data.</p>

<h2 id="bab2-2" style="margin-top:50px;">2.2 Penerapan Turunan dalam Teknologi Informasi</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p>Turunan merupakan salah satu konsep kalkulus yang banyak digunakan dalam bidang teknologi informasi. Melalui turunan, seorang pengembang sistem dapat mengetahui bagaimana suatu perubahan pada variabel tertentu memengaruhi kinerja sistem secara keseluruhan. Dalam dunia komputasi modern, informasi mengenai laju perubahan sangat penting karena membantu dalam pengambilan keputusan terkait optimasi sumber daya, peningkatan performa, dan efisiensi sistem.</p>

<p>Perusahaan teknologi saat ini mengelola berbagai sistem yang harus mampu melayani ribuan hingga jutaan pengguna setiap hari. Oleh karena itu, diperlukan metode yang dapat digunakan untuk menentukan kondisi optimal suatu sistem. Turunan memungkinkan kita untuk menemukan titik maksimum maupun minimum dari suatu fungsi sehingga dapat digunakan untuk menentukan performa terbaik yang dapat dicapai oleh sebuah sistem.</p>

<p>Selain digunakan pada server, konsep turunan juga diterapkan dalam machine learning, kecerdasan buatan, jaringan komputer, pengolahan citra digital, dan berbagai bidang teknologi lainnya. Dengan memahami konsep turunan, mahasiswa dapat melihat bagaimana matematika berperan dalam menyelesaikan berbagai permasalahan teknologi informasi secara nyata.</p>

<h2 id="bab2-3" style="margin-top:50px;">2.3 Studi Kasus: Optimasi Waktu Respon Server</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p style="font-weight: bold; font-style: italic;">A. Latar Belakang Masalah</p>
<p>Sebuah perusahaan penyedia layanan web ingin meningkatkan performa server yang digunakan untuk melayani permintaan pengguna. Berdasarkan hasil pengamatan, waktu respon server dipengaruhi oleh jumlah permintaan (request) yang diterima setiap detik. Hubungan antara jumlah request dan waktu respon server dimodelkan dengan fungsi:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">T(x) = 0,02x² – 1,2x + 40</p>
<ul style="margin: 0; padding-left: 20px;">
    <li style="margin-bottom: 5px;"><strong>x</strong> = jumlah request per detik</li>
    <li style="margin-bottom: 5px;"><strong>T(x)</strong> = waktu respon server (milidetik)</li>
</ul>
<p style="margin-top: 12px;">Tujuan perusahaan adalah menentukan jumlah request yang menghasilkan waktu respon minimum sehingga server dapat bekerja secara optimal.</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">B. Analisis Permasalahan</p>
<p>Dalam pengelolaan server, waktu respon merupakan salah satu indikator utama kualitas layanan. Semakin kecil waktu respon yang dihasilkan, semakin cepat sistem merespons permintaan pengguna.</p>
<p>Jika jumlah request terlalu sedikit, sumber daya server belum dimanfaatkan secara maksimal. Sebaliknya, jika jumlah request terlalu banyak, server dapat mengalami antrean proses sehingga waktu respon meningkat. Oleh karena itu, diperlukan jumlah request yang optimal agar sistem tetap berjalan secara efisien. Untuk menentukan nilai optimum tersebut, digunakan konsep turunan karena turunan mampu menunjukkan titik ketika suatu fungsi mencapai nilai minimum atau maksimum.</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">C. Penyelesaian Menggunakan Turunan</p>

<p><strong>Langkah 1: Menentukan Turunan Pertama</strong></p>
<p>Diketahui fungsi:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">T(x) = 0,02x² – 1,2x + 40</p>
<p>Turunkan setiap suku:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">T'(x) = 0,04x – 1,2</p>
<p>Turunan pertama ini menunjukkan laju perubahan waktu respon terhadap perubahan jumlah request.</p>

<p><strong>Langkah 2: Menentukan Titik Kritis</strong></p>
<p>Syarat titik kritis adalah T'(x) = 0:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">0,04x – 1,2 = 0<br>0,04x = 1,2<br>x = 30 request per detik</p>

<p><strong>Langkah 3: Melakukan Uji Turunan Kedua</strong></p>
<p style="text-align: center; font-size: 18px; font-style: italic;">T''(x) = 0,04</p>
<p>Karena T''(x) &gt; 0, maka titik kritis tersebut merupakan <strong>titik minimum</strong>.</p>

<p><strong>Langkah 4: Menentukan Waktu Respon Minimum</strong></p>
<p>Substitusikan nilai x = 30 ke fungsi awal:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">T(30) = 0,02(30)² – 1,2(30) + 40<br>T(30) = 18 – 36 + 40<br>T(30) = 22 milidetik</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">D. Interpretasi Hasil</p>
<p>Berdasarkan hasil perhitungan diperoleh bahwa waktu respon minimum terjadi ketika server menerima sekitar <strong>30 request per detik</strong>. Pada kondisi tersebut waktu respon server hanya sebesar <strong>22 milidetik</strong>. Hasil ini menunjukkan bahwa server bekerja paling efisien ketika menerima beban sebesar 30 request per detik. Jika jumlah request meningkat melebihi angka tersebut, waktu respon akan mulai bertambah sehingga pengguna dapat merasakan penurunan performa layanan.</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">E. Implementasi dalam Dunia Industri</p>
<p>Dalam praktiknya, hasil analisis ini dapat digunakan oleh tim DevOps untuk menentukan kapasitas server yang dibutuhkan. Selain itu, informasi tersebut juga dapat digunakan dalam pengaturan load balancing dan auto-scaling agar server tetap bekerja pada kondisi optimal. Dengan memanfaatkan analisis turunan, perusahaan dapat meningkatkan kualitas layanan sekaligus mengurangi biaya operasional akibat penggunaan sumber daya yang berlebihan.</p>

<h2 id="bab2-4" style="margin-top:50px;">2.4 Studi Kasus: Optimasi Performa Perusahaan SaaS</h2>
<hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 8px 0 24px;">

<p style="font-weight: bold; font-style: italic;">A. Latar Belakang</p>
<p>Sebuah perusahaan Software as a Service (SaaS) ingin mengetahui jumlah pengguna aktif yang menghasilkan performa server terbaik. Model matematis yang digunakan adalah:</p>
<p style="text-align: center; font-size: 18px; font-style: italic;">R(u) = 0,001u² – 0,12u + 25</p>
<ul style="margin: 0; padding-left: 20px;">
    <li style="margin-bottom: 5px;"><strong>u</strong> = jumlah pengguna aktif per menit</li>
    <li style="margin-bottom: 5px;"><strong>R(u)</strong> = waktu respon server (ms)</li>
</ul>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">B. Penyelesaian</p>
<p><strong>Turunan pertama:</strong></p>
<p style="text-align: center; font-size: 18px; font-style: italic;">R'(u) = 0,002u – 0,12</p>

<p><strong>Titik kritis (R'(u) = 0):</strong></p>
<p style="text-align: center; font-size: 18px; font-style: italic;">0,002u – 0,12 = 0<br>0,002u = 0,12<br>u = 60</p>

<p><strong>Turunan kedua:</strong></p>
<p style="text-align: center; font-size: 18px; font-style: italic;">R''(u) = 0,002 &gt; 0 → Titik Minimum ✓</p>

<p><strong>Substitusi u = 60:</strong></p>
<p style="text-align: center; font-size: 18px; font-style: italic;">R(60) = 0,001(60)² – 0,12(60) + 25<br>R(60) = 3,6 – 7,2 + 25<br>R(60) = 21,4 ms</p>

<p style="font-weight: bold; font-style: italic; margin-top: 20px;">C. Interpretasi</p>
<p>Sistem mencapai performa terbaik ketika terdapat sekitar <strong>60 pengguna aktif per menit</strong> dengan waktu respon sebesar <strong>21,4 milidetik</strong>. Jika jumlah pengguna melebihi nilai tersebut, waktu respon akan mulai meningkat sehingga diperlukan strategi tambahan seperti load balancing atau penambahan kapasitas server.</p>