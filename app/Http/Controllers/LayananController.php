<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{


    public function index(Request $request)
    {
        $layanan = Layanan::query()
            ->latest()
            ->paginate(10)
            ->withQueryString();


        return view('pages.layanan.layanan', compact('layanan'));
    }
}
