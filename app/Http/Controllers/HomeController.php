<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $stats = [
            ['value' => '3+', 'label' => 'Tahun Pengalaman'],
            ['value' => '100+', 'label' => 'Klien Terlayani'],
            ['value' => '1K+', 'label' => 'Bibit Tersalurkan'],
            ['value' => '✔', 'label' => 'Tersertifikasi Resmi'],
        ];


        $layanan = [
            ['icon' => '🌱', 'title' => 'Pembibitan', 'desc' => 'Layanan pembibitan mencakup penyemaian hingga perawatan bibit berkualitas tinggi untuk mendukung program reboisasi, pertanian, dan hortikultura.'],
            ['icon' => '🌾', 'title' => 'Pertanian', 'desc' => 'Kami menyediakan solusi pertanian terpadu seperti pengolahan lahan, penyediaan benih unggul, hingga distribusi hasil pertanian yang efisien.'],
            ['icon' => '🌳', 'title' => 'Perkebunan', 'desc' => 'Mendukung pelestarian hutan dengan penyediaan bibit pohon keras, program penghijauan, dan kerja sama reboisasi bersama pemerintah dan mitra.'],
            ['icon' => '🌳', 'title' => 'Kehutanan', 'desc' => 'Mendukung pelestarian hutan dengan penyediaan bibit pohon keras, program penghijauan, dan kerja sama reboisasi bersama pemerintah dan mitra.'],
        ];

        $articles = [
            [
                'title' => 'Mengenal Apa itu Sistem Traceability',
                'author' => 'Arya',
                'date' => '2024-08-29',
                'read_time' => 8,
                'image' => 'images/KS.jpg',
                'tags' => ['Teknologi', 'Agrikultur', 'Agribisnis'],
            ],
            [
                'title' => 'INVESTASI HIDROPONIK MELON',
                'author' => 'Agus Wahyudiono',
                'date' => '2024-07-07',
                'read_time' => 2,
                'image' => 'images/hero-bg.jpg',
                'tags' => ['Teknologi', 'Agrikultur', 'Tanaman'],
            ],
            [
                'title' => 'Menuju Pertanian yang Efisien dan Berkelanjutan',
                'author' => 'Admin Karya Saginta',
                'date' => '2023-11-23',
                'read_time' => 2,
                'image' => 'images/cv-karya saginta1.png',
                'tags' => ['Agrikultur'],
            ],
            [
                'title' => 'Menuju Pertanian yang Efisien dan Berkelanjutan',
                'author' => 'Admin Karya Saginta',
                'date' => '2023-11-23',
                'read_time' => 2,
                'image' => 'images/cv-karya saginta1.png',
                'tags' => ['Agrikultur'],
            ],

        ];

        $produk = Product::with('category')
            ->latest()
            ->take(8)
            ->get(['id','name', 'image', 'category_id']);

        $testimonials = [
            [
                'name' => 'Ir. Suryanto',
                'role' => 'Dinas Kehutanan Karo',
                'photo' => 'Logo.png',
                'message' => 'Pelayanan cepat dan bibit yang kami terima sangat berkualitas. Cocok untuk kebutuhan reboisasi kami.'
            ],
            [
                'name' => 'Budi Santoso',
                'role' => 'Petani Mitra',
                'photo' => 'Logo.png',
                'message' => 'Sudah 3 kali order bibit durian dan alpukat. Semua tumbuh subur dan sehat!'
            ],
            [
                'name' => 'Dr. Maya Lubis',
                'role' => 'Universitas Sumatera',
                'photo' => 'Logo.png',
                'message' => 'Mereka sangat profesional dan mendukung riset kami dengan penyediaan bibit unggul berkualitas tinggi.'
            ],
        ];
        return view('pages.home.home', compact('articles', 'produk', 'testimonials', 'layanan', 'stats'));
    }
}
