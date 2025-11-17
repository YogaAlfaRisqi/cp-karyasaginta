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


         $layanan = Layanan::with('category')
                ->latest()
                ->limit(3)
                ->get();
        $produk = Product::with('category')
            ->latest()
            ->take(8)
            ->get(['id', 'name', 'image', 'category_id']);
        // Ambil semua pengalaman yang dipublikasikan
        $experiences = Experience::query()
            ->with(['category', 'user'])
            ->where('is_published', true)
            ->latest('start_date')
            ->paginate(9); // Gunakan pagination agar efisien

        $testimonials = Testimonials::latest()
            ->take(4)
            ->get(['name', 'position', 'message', 'photo_url']);
        $wa = '6281234567890';

        return view('pages.home.home', compact( 'produk', 'experiences', 'testimonials', 'layanan', 'stats', 'wa'));
    }
}
