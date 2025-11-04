<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    
    public function index(Request $request)
    {
        $filters = $request->only(['kategori', 'search']);
        $categories = Category::all();
        $wa = $request->get('admin_phone');

        $products = Product::with('category', 'creator', 'updater')
            ->filter($request->only(['kategori', 'search']))
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('pages.produk.produk', compact('products', 'categories', 'wa', 'filters'));
    }

}
