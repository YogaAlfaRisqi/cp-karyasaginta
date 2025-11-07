<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    /**
     * Tampilkan daftar semua pengalaman
     */
    public function index()
    {
        // Ambil semua pengalaman yang dipublikasikan
        $experiences = Experience::query()
            ->with(['category', 'user'])
            ->where('is_published', true)
            ->latest('start_date')
            ->paginate(9); // Gunakan pagination agar efisien

        return view('pages.pengalaman.index', compact('experiences'));
    }

    /**
     * Tampilkan detail pengalaman berdasarkan slug
     */
    public function show(string $slug)
    {
        // Cari pengalaman berdasarkan slug
        $experience = Experience::with(['category', 'user'])
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        // Tambahkan jumlah views
        $experience->increment('views');

        // Ambil beberapa pengalaman lain sebagai rekomendasi
        $relatedExperiences = Experience::with('category')
            ->where('is_published', true)
            ->where('id', '!=', $experience->id)
            ->latest('start_date')
            ->take(5)
            ->get();

        return view('pages.pengalaman.show', compact('experience', 'relatedExperiences'));
    }

    /**
     * (Opsional) Tampilkan pengalaman berdasarkan kategori
     */
    public function category(string $slug)
    {
        $experiences = Experience::with(['category', 'author'])
            ->whereHas('category', fn($q) => $q->where('slug', $slug))
            ->where('is_published', true)
            ->latest('start_date')
            ->paginate(9);

        return view('pages.pengalaman.index', compact('experiences'));
    }
}
