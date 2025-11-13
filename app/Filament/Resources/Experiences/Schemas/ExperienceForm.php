<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->label('Diupload oleh')
                    ->relationship('user', 'name') // 🔥 otomatis ambil nama dari relasi user
                    // ->searchable()
                    ->preload()
                    ->required(),

                Select::make('experience_category_id')
                    ->label('Kategori')
                    ->relationship('category', 'name') // ✅ ambil berdasarkan relasi category()
                    // ->searchable()
                    ->preload()
                    ->required()
                    ->placeholder('Pilih kategori kegiatan...'),

                TextInput::make('title')
                    ->required(),
                TextInput::make('subtitle'),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('summary')
                    ->columnSpanFull(),
                Textarea::make('content')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->directory('experiences')
                    ->disk('public')
                    ->visibility('public'),
                TextInput::make('gallery'),
                TextInput::make('location'),
                TextInput::make('partner'),
                DatePicker::make('start_date'),
                DatePicker::make('end_date'),
                Toggle::make('is_current')
                    ->required(),
                TextInput::make('views')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_published')
                    ->required(),
                TextInput::make('tags'),
            ]);
    }
}
