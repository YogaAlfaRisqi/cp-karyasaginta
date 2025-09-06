<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['updated_by'] = Auth::id();

        return $data;
    }
}
