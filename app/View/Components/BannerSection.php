<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BannerSection extends Component
{
    public $title;
    public $subtitle;
    public $image;
    public $height;

    public function __construct($title, $subtitle = null, $image = null, $height = 'h-64 lg:h-[40vh]')
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->image = $image ?? 'https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=1600&q=80';
        $this->height = $height;
    }

    public function render()
    {
        return view('components.banner-section');
    }
}
