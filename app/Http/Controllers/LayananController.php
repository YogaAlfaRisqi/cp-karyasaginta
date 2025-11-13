<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;


class LayananController extends Controller
{
    public function index(Request $requess)
    {

        $search = $requess->query('search');
        $layanan = Layanan::query()
            ->when($search, function ($query, $search) {
                $query->where('nama', 'like', "%{$search}%")
                    ->orWhere('deskripsi', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();
        return view('pages.layanan.index', compact('layanan', 'search'));
    }
}
