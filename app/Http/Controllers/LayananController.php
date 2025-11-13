<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

<<<<<<< HEAD
class LayananController extends Controller
{


    public function index(Request $request)
    {
        $layanan = Layanan::query()
            ->latest()
            ->paginate(10)
            ->withQueryString();


        return view('pages.layanan.layanan', compact('layanan'));
=======
class LayananController extends Controller{
    public function index(Request $requess){

        $search = $requess->query('search');
        $layanan = Layanan::query()
            ->when($search, function ($query, $search) {
                $query->where('nama', 'like', "%{$search}%")
                      ->orWhere('deskripsi', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10) 
            ->withQueryString(); 
        return view('pages.layanan.index',compact('layanan', 'search'));
>>>>>>> 93877ef09fd6813c2ef78e57fac8426f496737ff
    }
}
