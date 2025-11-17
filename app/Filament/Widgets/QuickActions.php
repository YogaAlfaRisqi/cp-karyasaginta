<?php

namespace App\Filament\Widgets;

use Filament\Actions\Action;
use Filament\Widgets\Widget;
use App\Filamen;
use App\Filament\Resources\Clients\ClientResource;
use App\Filament\Resources\Experiences\ExperienceResource;
use App\Filament\Resources\Layanans\LayananResource;
use App\Filament\Resources\Products\ProductResource;
use App\Filament\Resources\ServiceCategories\ServiceCategoryResource;
use App\Filament\Resources\Testimonials\TestimonialResource;

class QuickActions extends Widget
{
    protected string $view = 'filament.widgets.quick-actions';
    // protected static string $view = 'filament.widgets.quick-actions';
    
    protected static ?int $sort = 2;
    
    protected int | string | array $columnSpan = 'full';
    
    protected function getActions(): array
    {
        return [
            Action::make('addClient')
                ->label('Tambah Klien')
                ->url(ClientResource::getUrl('create'))
                ->icon('heroicon-o-user-plus')
                ->color('success')
                ->outlined(),

            Action::make('addProduct')
                ->label('Tambah Produk')
                ->url(ProductResource::getUrl('create'))
                ->icon('heroicon-o-plus-circle')
                ->color('info')
                ->outlined(),

            Action::make('addService')
                ->label('Tambah Layanan')
                ->url(LayananResource::getUrl('create'))
                ->icon('heroicon-o-wrench')
                ->color('warning')
                ->outlined(),

            Action::make('addTestimonial')
                ->label('Tambah Testimoni')
                ->url(TestimonialResource::getUrl('create'))
                ->icon('heroicon-o-star')
                ->color('primary')
                ->outlined(),

            Action::make('addExperience')
                ->label('Tambah Galeri')
                ->url(ExperienceResource::getUrl('create'))
                ->icon('heroicon-o-photo')
                ->color('danger')
                ->outlined(),

            Action::make('manageCategories')
                ->label('Kelola Kategori')
                ->url(ServiceCategoryResource::getUrl('index'))
                ->icon('heroicon-o-folder')
                ->color('gray')
                ->outlined(),

        ];
    }
}
