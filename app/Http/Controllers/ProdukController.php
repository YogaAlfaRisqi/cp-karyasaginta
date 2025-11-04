<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
  public function index(Request $request)
  {

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
