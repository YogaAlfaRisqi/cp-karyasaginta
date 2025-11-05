<?php

namespace App\Filament\Resources\Pengalamen\Pages;

use App\Filament\Resources\Pengalamen\PengalamanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPengalamen extends ListRecords
{
    protected static string $resource = PengalamanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
