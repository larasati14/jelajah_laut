<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $faqs = [
        ['Apa itu Jelajah Laut?', 'Jelajah Laut adalah platform ensiklopedia digital tentang fauna laut Nusantara.'],
        ['Apakah informasi di Jelajah Laut terpercaya?', 'Ya, informasi dikurasi dari sumber-sumber terpercaya dan pakar kelautan.'],
        ['Bagaimana cara ikut berkontribusi?', 'Anda bisa mengisi form di bagian Help Us untuk memberikan data atau saran.'],
        ['Apakah platform ini gratis?', 'Ya, Jelajah Laut dapat diakses secara gratis oleh semua pengguna.'],
        ['Bisa digunakan untuk penelitian?', 'Tentu, Jelajah Laut mendukung penelitian dengan informasi ilmiah.'],
        ['Apakah tersedia fitur pencarian fauna?', 'Ya, tersedia pencarian berbasis nama fauna pada bagian maps.'],
        ['Bisa kirim gambar fauna?', 'Untuk saat ini, fitur upload gambar belum tersedia, tapi akan dikembangkan.'],
        ['Siapa yang mengelola platform ini?', 'Platform ini dikembangkan oleh tim Jelajah Laut bersama komunitas ilmuwan.'],
        ['Apakah tersedia dalam bahasa Inggris?', 'Versi bahasa Inggris sedang dikembangkan dan segera tersedia.'],
        ['Bagaimana jika menemukan kesalahan data?', 'Silakan kirim laporan melalui form Help Us atau kontak kami.'],
    ];

    foreach ($faqs as $faq) {
        Faq::create([
            'question' => $faq[0],
            'answer' => $faq[1],
        ]);
    }
}
}
