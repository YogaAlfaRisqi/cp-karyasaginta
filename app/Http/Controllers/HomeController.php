<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
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
            
        ];

        return view('landing-page.landingPage', compact('articles'));
    }
}
