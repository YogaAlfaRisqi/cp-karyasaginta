<?php

namespace App\Filament\Resources\Pengalamen\Pages;

use App\Filament\Resources\Pengalamen\PengalamanResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditPengalaman extends EditRecord
{
    protected static string $resource = PengalamanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
