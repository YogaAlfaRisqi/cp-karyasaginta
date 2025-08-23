<?php

namespace App\Http\Controllers;

class PengalamanController extends Controller
{
    public function index()
    {
        $experiences = [
            [
                'title' => 'Rehabilitasi',
                'subtitle' => '500 bibit alpukat unggul varietas hass disalurkan untuk program ketahanan pangan.',
                'slug' => 'distribusi-alpukat-jabar',
                'image' => 'images/pengalaman/k1.jpg',
            ],
            [
                'title' => 'Pengadaan Bibit Pinang Unggul untuk Perkebunan',
                'subtitle' => 'Proyek penyediaan bibit pinang varietas betara di Kalimantan Timur.',
                'slug' => 'bibit-pinang-kaltim',
                'image' => 'images/pengalaman/k2.jpg',
            ],
            [
                'title' => 'Distribusi Bibit Alpukat di Lahan Rehabilitasi',
                'subtitle' => 'Reforestasi dengan tanaman bernilai ekonomi tinggi di Sumatera Selatan.',
                'slug' => 'petai-jengkol-sumsel',
                'image' => 'images/pengalaman/k3.jpg',
            ],
        ];



        return view('pages.pengalaman.index', compact('experiences'));
    }

    public function show($slug)
    {
        $experiences = [
            'distribusi-alpukat-jabar' => [
                'title' => 'Judul proyek',
                'subtitle' => 'Deskripsi singkat',
                'location' => 'Sumatera Utara',
                'date' => 'Agustus 2024',
                'image' => 'images/pengalaman/k1.jpg',
                'content' => 'Penjelasan lengkap proyek'
            ],
            'bibit-pinang-kaltim' => [
                'title' => 'Judul proyek',
                'subtitle' => 'Deskripsi singkat',
                'location' => 'Sumatera Utara',
                'date' => 'Agustus 2025',
                'image' => 'images/pengalaman/k2.jpg',
                'content' => 'Penjelasan lengkap proyek'
            ],
            'petai-jengkol-sumsel' => [
                'title' => 'Judul proyek',
                'subtitle' => 'Deskripsi singkat',
                'location' => 'Lokasi proyek',
                'date' => 'Agustus 2025',
                'image' => 'images/pengalaman/k3.jpg',
                'content' => 'Penjelasan lengkap proyek'
            ],
        ];

        if (!isset($experiences[$slug])) {
            abort(404);
        }

        $experience = $experiences[$slug];

        return view('pages.pengalaman.show', compact('experience'));
    }
}
