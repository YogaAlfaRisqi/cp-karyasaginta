<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\ExperienceCategory;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    /**
     * Ambil data sidebar (Latest Posts, Categories, Tags, Social Media)
     * Bisa dipanggil di semua method
     */
    private function sidebarData()
    {
        $latestPosts = Experience::with('category', 'user')
            ->where('is_published', true)
            ->latest('start_date')
            ->take(3)
            ->get();

       // 2. Categories yang punya pengalaman publik
        $categories = ExperienceCategory::withCount(['experiences' => fn($q) => $q->where('is_published', true)])
            ->whereHas('experiences', fn($q) => $q->where('is_published', true))
            ->get();


        $tags = ['#BibitUnggul', '#Mangga', '#Durian', '#Reboisasi', '#JawaBarat'];

        $socials = [
            ['icon' => 'facebook', 'url' => '#'],
            ['icon' => 'linkedin', 'url' => '#'],
            ['icon' => 'instagram', 'url' => '#'],
            ['icon' => 'twitter', 'url' => '#'],
        ];

        return compact('latestPosts', 'categories', 'tags', 'socials');
    }

    /**
     * Tampilkan daftar semua pengalaman
     */
    public function index()
    {
        $experiences = Experience::with(['category', 'user'])
            ->where('is_published', true)
            ->latest('start_date')
            ->paginate(9);

        $sidebar = $this->sidebarData();

        return view('pages.pengalaman.index', compact('experiences') + $sidebar);
    }

    /**
     * Tampilkan detail pengalaman berdasarkan slug
     */
    public function show(string $slug)
    {
        $experience = Experience::with(['category', 'user'])
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        $experience->incrementViews();

        $relatedExperiences = Experience::with(['category', 'user'])
            ->where('is_published', true)
            ->where('id', '!=', $experience->id)
            ->latest('start_date')
            ->take(5)
            ->get();

        $sidebar = $this->sidebarData();

        return view('pages.pengalaman.show', compact('experience', 'relatedExperiences') + $sidebar);
    }

    /**
     * Tampilkan pengalaman berdasarkan kategori
     */
    public function category(string $slug)
    {
        // Ambil kategori dan semua pengalaman publik di kategori itu
        $category = ExperienceCategory::where('slug', $slug)->firstOrFail();

        $experiences = $category->experiences()
            ->with('user', 'category')
            ->where('is_published', true)
            ->latest('start_date')
            ->paginate(9);

        $sidebar = $this->sidebarData();

        return view('pages.pengalaman.index', compact('experiences', 'category') + $sidebar);
    }
}
