<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Layanan;
use App\Models\Product;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use PHPUnit\Event\Code\Test;

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

        $articles = [
            [
                'title' => 'Mengenal Apa itu Sistem Traceability',
                'author' => 'Arya',
                'date' => '2024-08-29',
                'read_time' => 8,
                'image' => 'images/KS.jpg',
                'tags' => ['Teknologi', 'Agrikultur', 'Agribisnis'],
            ],
        ];

        // $layanan = Layanan::latest()
        //     ->take(4)
        //     ->get(['image', 'title', 'description']);

     
            $layanan = [
                [
                    'image' => 'images/bibit/Kemiri.jpg',
                    'title' => 'Penangkaran & Pembibitan Unggul',
                    'category' => 'Pertanian • Kehutanan',
                    'rating' => '4.8',
                    'joined' => '2021',
                    'lokasi' => 'Bogor, Jawa Barat',
                    'waktu' => 'Sen–Sab • 08:00–17:00',
                    'desc' => 'Kami melayani penangkaran bibit tanaman unggul seperti sengon, mahoni, dan hortikultura dengan standar sertifikasi nasional.',
                    'cta' => 'Hubungi Kami'
                ],
                [
                    'image' => 'images/Kelengkeng.jpg',
                    'title' => 'Pengelolaan & Konsultasi Perkebunan',
                    'category' => 'Perkebunan • Agribisnis',
                    'rating' => '4.7',
                    'joined' => '2020',
                    'lokasi' => 'Sumedang, Jawa Barat',
                    'waktu' => 'Sen–Jum • 09:00–16:00',
                    'desc' => 'Mendampingi petani dan korporasi dalam manajemen kebun produktif: dari analisis lahan, pemupukan, hingga distribusi hasil panen.',
                    'cta' => 'Pelajari Lebih Lanjut'
                ],
                [
                    'image' => 'images/Bambu Hijau.jpg',
                    'title' => 'Program Penghijauan & Reboisasi',
                    'category' => 'Lingkungan • CSR',
                    'rating' => '4.9',
                    'joined' => '2019',
                    'lokasi' => 'Cianjur, Jawa Barat',
                    'waktu' => 'Sen–Sab • 07:30–16:30',
                    'desc' => 'Kami bekerja sama dengan instansi dan masyarakat dalam program reboisasi dan penghijauan kawasan kritis.',
                    'cta' => 'Gabung Program'
                ],
            ];

           
        
        $produk = Product::with('category')
            ->latest()
            ->take(8)
            ->get(['id','name', 'image', 'category_id']);
        // Ambil semua pengalaman yang dipublikasikan
        $experiences = Experience::query()
            ->with(['category', 'user'])
            ->where('is_published', true)
            ->latest('start_date')
            ->paginate(9); // Gunakan pagination agar efisien

        $testimonials = Testimonials::latest()
            ->take(4)
            ->get(['name', 'position', 'message', 'photo_url']);
        $wa='6281234567890';
        
        return view('pages.home.home', compact('articles', 'produk','experiences', 'testimonials', 'layanan', 'stats', 'wa'));
    }
}
