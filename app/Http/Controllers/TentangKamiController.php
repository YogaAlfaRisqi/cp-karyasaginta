<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKamiController extends Controller{
    public function tentang(){
        return view('pages.tentang-kami.tentang');
    }

     public function visiMisi(){
        return view('pages.tentang-kami.visi-misi');
    }

     public function gallery(){
        return view('pages.tentang-kami.gallery');
    }
}