<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProdukController extends Controller
{
    
    public function index(Request $request)
    {

        $categories = Cache::remember('categories', now()->addDays(3), function () {
            return Category::has('products')->get();
        });


        return view(
            'pages.produk.produk',
            [
                'categories' => $categories
            ]
        );
    }

    
}
