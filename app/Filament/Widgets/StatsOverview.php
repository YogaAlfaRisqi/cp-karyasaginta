<?php

namespace App\Filament\Widgets;

use App\Models\Client;
use App\Models\Experience;
use App\Models\Layanan;
use App\Models\Product;
use App\Models\Service;
use App\Models\Testimonials;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Container\Attributes\DB;

class StatsOverview extends StatsOverviewWidget
{
     protected static ?int $sort = 1;
    protected function getStats(): array
    {
        // Get products by category
        $productsByCategory = Product::selectRaw('category_id, COUNT(*) as total')
            ->groupBy('category_id')
            ->with('category')
            ->get()
            ->pluck('total', 'category.name')
            ->take(3);
        
        $productsDesc = $productsByCategory->isEmpty() 
            ? 'Semua produk di sistem'
            : $productsByCategory->map(fn($count, $cat) => "$cat: $count")->join(' • ');

        // Get services by category
        $servicesByCategory = Layanan::selectRaw('category_id, COUNT(*) as total')
            ->groupBy('category_id')
            ->with('category')
            ->get()
            ->pluck('total', 'category.name')
            ->take(3);
        
        $servicesDesc = $servicesByCategory->isEmpty() 
            ? 'Semua layanan tersedia'
            : $servicesByCategory->map(fn($count, $cat) => "$cat: $count")->join(' • ');

        // Get experiences by category
        $experiencesByCategory = Experience::selectRaw('experience_category_id, COUNT(*) as total')
            ->groupBy('experience_category_id')
            ->with('category')
            ->get()
            ->pluck('total', 'category.name')
            ->take(3);
        
        $experiencesDesc = $experiencesByCategory->isEmpty() 
            ? 'Portfolio & proyek'
            : $experiencesByCategory->map(fn($count, $cat) => "$cat: $count")->join(' • ');

        // Calculate chart data - last 8 months count
        $months = 8;
        
        $productChart = Product::where('created_at', '>=', now()->subMonths($months))
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count')
            ->toArray();

        $serviceChart = Service::where('created_at', '>=', now()->subMonths($months))
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count')
            ->toArray();

        $testimonialChart = Testimonials::where('created_at', '>=', now()->subMonths($months))
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count')
            ->toArray();

        $experienceChart = Experience::where('created_at', '>=', now()->subMonths($months))
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count')
            ->toArray();

    
        $clientChart = Client::where('created_at', '>=', now()->subMonths($months))
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count')
            ->toArray();

        return [
            Stat::make('Total Klien', Client::count())
                ->description('Klien terdaftar di sistem')
                ->descriptionIcon('heroicon-m-users')
                ->color('success')
                ->chart(!empty($clientChart) ? $clientChart : [0]),
            
            Stat::make('Total Produk', Product::count())
                ->description($productsDesc)
                ->descriptionIcon('heroicon-m-shopping-bag')
                ->color('info')
                ->chart(!empty($productChart) ? $productChart : [0]),
            
            Stat::make('Total Layanan', Service::count())
                ->description($servicesDesc)
                ->descriptionIcon('heroicon-m-wrench-screwdriver')
                ->color('warning')
                ->chart(!empty($serviceChart) ? $serviceChart : [0]),
            
            Stat::make('Total Testimoni', Testimonials::count())
                ->description('Feedback dari klien')
                ->descriptionIcon('heroicon-m-star')
                ->color('primary')
                ->chart(!empty($testimonialChart) ? $testimonialChart : [0]),
            
            Stat::make('Total Galeri', Experience::count())
                ->description($experiencesDesc)
                ->descriptionIcon('heroicon-m-photo')
                ->color('danger')
                ->chart(!empty($experienceChart) ? $experienceChart : [0]),
        ];
    }
}
