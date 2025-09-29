<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('title')
                    ->required(),
                TextInput::make('description')
                    ->required(),
                FileUpload::make('image')
                    ->image(),

            ]);
    }
}
