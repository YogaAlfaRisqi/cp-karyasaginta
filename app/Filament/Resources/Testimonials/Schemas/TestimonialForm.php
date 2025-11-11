<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Dom\Text;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('position')
                    ->required(),
                Textarea::make('message')
                    ->required(),
                FileUpload::make('photo_url')
                    ->image()
                    ->directory('testimonials')
                    ->disk('public')
                    ->visibility('public'),
            ]);
    }
}
