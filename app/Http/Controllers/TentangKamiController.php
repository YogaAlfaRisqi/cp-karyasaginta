<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{

    public function tentang(Request $request)
    {
        $client =  Client::query()
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $products = Product::query()
        ->latest()
        ->get();

        return view('pages.tentang-kami.tentang', compact('client','products'));
    }

    public function visiMisi()
    {
        return view('pages.tentang-kami.visi-misi');
    }

    public function gallery()
    {
        return view('pages.tentang-kami.gallery');
    }
}
