<?php

namespace Database\Seeders;

use App\Models\Merch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Merch::factory()
        //     ->count(20)
        //     ->create();

        DB::table('merchs')->insert([
            [
                'nama' => 'Mug Galseid',
                'gambar' => 'https://i.pinimg.com/originals/5c/25/b1/5c25b1823e94badfa24d88dcf1f15838.png',
                'deskripsi' => 'Nikmati pagi yang penuh inspirasi dengan Mug Galseid, eksklusif dari Galeri Seni Digital Indonesia. Dengan desain yang modern dan detail yang menawan, mug ini tidak hanya menyajikan minuman favorit Anda, tetapi juga memperindah meja kerja atau ruang istirahat. Dibuat dengan material berkualitas tinggi, Mug Galseid adalah pilihan sempurna untuk mengekspresikan semangat seni dan kreativitas setiap hari.',
                'harga' => 69000,
                'link' => 'https://wa.me/6285123456789',
            ],
            [
                'nama' => 'Hoodie Galseid Hitam',
                'gambar' => 'https://i.pinimg.com/originals/88/f0/b6/88f0b6d6fc1779b882194c5d093fded6.png',
                'deskripsi' => 'Persembahan terbaru dari Galeri Seni Digital Indonesia, Hoodie Galseid Hitam adalah simbol gaya dengan sentuhan seni. Didesain untuk kenyamanan maksimal dan tampilan yang modis, hoodie ini memadukan estetika seni digital dengan kehangatan dan kepraktisan. Cocok untuk melengkapi gaya santai Anda, Hoodie Galseid Hitam menjadi wujud nyata dari ekspresi seni yang membawa semangat kreatif ke dalam setiap momen.',
                'harga' => 299000,
                'link' => 'https://wa.me/6285123456789',
            ],
            [
                'nama' => 'Masker Galseid Putih',
                'gambar' => 'https://i.pinimg.com/originals/92/ff/bd/92ffbd67ae557c9c5dfc84572051ced0.png',
                'deskripsi' => 'Lindungi diri dengan gaya bersama Masker Galseid Putih dari Galeri Seni Digital Indonesia. Dibuat dengan material lembut dan nyaman, masker ini tidak hanya memberikan perlindungan, tetapi juga menambahkan sentuhan seni pada setiap langkah Anda. Desain eksklusif Galseid memberikan perpaduan antara keamanan dan gaya, menjadikan masker ini aksesori kesehatan yang tak hanya fungsional, tetapi juga modis.',
                'harga' => 29000,
                'link' => 'https://wa.me/6285123456789',
            ],
            [
                'nama' => 'Kaos Galseid Hitam',
                'gambar' => 'https://i.pinimg.com/originals/61/81/74/61817496a72df864bcf593418009eb67.png',
                'deskripsi' => 'Kreasikan gaya Anda dengan Kaos Galseid Hitam, manifestasi visual dari Galeri Seni Digital Indonesia. Desain yang unik dan inovatif menciptakan sebuah kanvas hidup yang bisa Anda kenakan setiap hari. Kaos ini memberikan perasaan nyaman sepanjang hari, sementara motif Galseid yang khas menambahkan sentuhan seni pada gaya keseharian Anda. Pilih Kaos Galseid Hitam untuk merayakan kreativitas dan keindahan dalam mode sehari-hari Anda.',
                'harga' => 199000,
                'link' => 'https://wa.me/6285123456789',
            ],
        ]);
    }
}
