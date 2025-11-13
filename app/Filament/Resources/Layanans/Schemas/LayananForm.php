<?php

namespace App\Filament\Resources\Layanans\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class LayananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
<<<<<<< HEAD
                    ->directory('layanan')
                    ->disk('public')
                    ->visibility('public'),
                TextInput::make('created_by')
                    ->numeric(),
                TextInput::make('updated_by')
                    ->numeric(),
=======
                    ->directory('layanans')
                    ->disk('public')
                    ->visibility('public'),
>>>>>>> 93877ef09fd6813c2ef78e57fac8426f496737ff
            ]);
    }
}
