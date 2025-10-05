<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
  public function index(Request $request)
  {

    // $produk = [
    // ['img' => 'Alpukat.jpeg', 'title' => 'Bibit Alpukat Mentega', 'desc' => 'Cocok untuk dataran rendah dan tinggi.'],
    // ['img' => 'Aren.jpeg', 'title' => 'Durian Musang King', 'desc' => 'Rasa manis legit dan produktivitas tinggi.'],
    // ['img' => 'Mangga.jpeg', 'title' => 'Mangga Harum Manis', 'desc' => 'Bibit cepat tumbuh dan berbuah besar.'],
    // ['img' => 'Duku.jpg', 'title' => 'Bibit Duku Super', 'desc' => 'Manis dan cocok di iklim tropis.'],
    // ['img' => 'Beringin.jpeg', 'title' => 'Beringin', 'desc' => 'Cocok untuk kebutuhan pasar dan dapur.'],
    // ['img' => 'Durian.jpeg', 'title' => 'Bibit Durian', 'desc' => 'Tahan penyakit dan hasil berkualitas.'],
    // ];

    $filters = [
      'kategori' => $request->get('kategori'),
      'search'   => $request->get('search'),
    ];
    $product = Product::with('category')
      ->orderBy('created_at', 'desc')
      ->filter($filters)
      ->paginate(12);

    $categories = Category::all();

    $wa = '628126527016';
    return view('pages.produk.produk', compact('product', 'categories', 'wa', 'filters'));

  }
}
