<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chapter;
use Illuminate\Support\Str;

class ChapterSeeder extends Seeder
{
    public function run(): void
    {
        $materi = [
            [
                'title' => '1. Implementasi Turunan dan Integral',
                'order' => 1,
                'content' => "Kalkulus bukan sekadar rumus, melainkan alat untuk membaca perubahan di dunia nyata.\n\n* **Turunan (Diferensial):** Digunakan untuk mengukur **laju perubahan sesaat**.\n* **Integral:** Digunakan untuk **acumulasi** dan menghitung totalitas."
            ],
            [
                'title' => '2. Studi Kasus: Optimasi Pendapatan',
                'order' => 2,
                'content' => "Hubungan antara harga \$p\$ dan jumlah pengguna \$x\$ dinyatakan dalam fungsi:\n\$\$p(x) = 100 - 0.01x\$\$\n\nFungsi total pendapatan (Revenue):\n\$\$R(x) = 100x - 0.01x^2\$\$\n\nTurunan pertama \$R'(x) = 0\$ untuk mencari keuntungan maksimum:\n\$\$R'(x) = 100 - 0.02x = 0 \\implies x = 5000\$\$"
            ],
            [
                'title' => '3. Integral Tak Tentu vs Integral Tentu',
                'order' => 3,
                'content' => "* **Integral Tak Tentu:** Merupakan antiturunan. Hasilnya berupa fungsi baru + \$C\$.\n\$\$\\int f(x) \\, dx = F(x) + C\$\$\n* **Integral Tentu:** Memiliki batas atas dan bawah, menghasilkan nilai numerik.\n\$\$\\int_{a}^{b} f(x) \\, dx\$\$"
            ],
            [
                'title' => '4. Evaluasi Penggunaan Turunan',
                'order' => 4,
                'content' => "Evaluasi dilakukan untuk menganalisis perilaku suatu sistem dinamis melalui:\n* **Laju Pertumbuhan:** Seberapa cepat suatu variabel berubah.\n* **Sensitivitas Sistem:** Mengukur respons output terhadap perubahan input."
            ],
            [
                'title' => '5. Kriteria Evaluasi Turunan',
                'order' => 5,
                'content' => "Analisis grafik menggunakan turunan:\n* **Turunan Pertama (\$f'(x)\$):** Jika \$>0\$ naik, jika \$<0\$ turun.\n* **Turunan Kedua (\$f''(x)\$):** Jika \$>0\$ cekung ke atas (minimum), jika \$<0\$ cekung ke bawah (maksimum)."
            ],
            [
                'title' => '6. Hubungan Integral dan Turunan',
                'order' => 6,
                'content' => "Dijelaskan dalam **Teorema Dasar Kalkulus** bahwa operasi ini saling berkebalikan:\n\$\$\\int_{a}^{b} f(x) \\, dx = F(b) - F(a)\$\$\n\nJika kamu menurunkan sebuah integral, kamu kembali ke fungsi asal:\n\$\$\\frac{d}{dx} \\left( \\int_{a}^{x} f(t) \\, dt \\right) = f(x)\$\$"
            ],
            [
                'title' => '7. Evaluasi Hasil Integral',
                'order' => 7,
                'content' => "Cara mengevaluasi hasil integral:\n1. **Diferensiasi Balik:** Menurunkan kembali fungsi hasil integral.\n2. **Metode Numerik:** Pendekatan Riemann atau Aturan Trapesium untuk fungsi kompleks."
            ],
            [
                'title' => '8. Implementasi dalam Sistem Komputer dan AI',
                'order' => 8,
                'content' => "Kalkulus dalam dunia IT:\n* **Gradient Descent (AI):** Menggunakan turunan parsial untuk meminimalkan error pada model AI.\n* **PID Controller (Robotika):** Menggunakan Integral dan Turunan untuk menyeimbangkan sistem robotik."
            ],
        ];

        foreach ($materi as $item) {
            Chapter::create([
                'title' => $item['title'],
                'slug' => Str::slug($item['title']),
                'content' => $item['content'],
                'order' => $item['order']
            ]);
        }
    }
}