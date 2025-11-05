<?php

namespace App\Filament\Resources\Pengalamen;

use App\Filament\Resources\Pengalamen\Pages\CreatePengalaman;
use App\Filament\Resources\Pengalamen\Pages\EditPengalaman;
use App\Filament\Resources\Pengalamen\Pages\ListPengalamen;
use App\Filament\Resources\Pengalamen\Schemas\PengalamanForm;
use App\Filament\Resources\Pengalamen\Tables\PengalamenTable;
use App\Models\Pengalaman;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengalamanResource extends Resource
{
    protected static ?string $model = Pengalaman::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Pengalaman';

    public static function form(Schema $schema): Schema
    {
        return PengalamanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PengalamenTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPengalamen::route('/'),
            'create' => CreatePengalaman::route('/create'),
            'edit' => EditPengalaman::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
