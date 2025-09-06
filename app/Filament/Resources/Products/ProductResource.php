<?php

namespace App\Filament\Resources;

use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\TrashedFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Filament\Resources\ProductResource\Pages\ListProducts;
use App\Filament\Resources\ProductResource\Pages\CreateProduct;
use App\Filament\Resources\ProductResource\Pages\EditProduct;

class ProductResource extends Resource
{
    // Model
    protected static ?string $model = Product::class;

    // Icon sidebar
    protected static ?string $navigationIcon = 'heroicon-o-cube';

    // Title record
    protected static ?string $recordTitleAttribute = 'name';

    // -------------------------
    // Form schema
    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('description')
                ->rows(4),

            Forms\Components\TextInput::make('price')
                ->numeric()
                ->prefix('Rp')
                ->required(),

            Forms\Components\FileUpload::make('image')
                ->image()
                ->directory('products')
                ->visibility('public'),
        ]);
    }

    // -------------------------
    // Table schema
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Photo')->square(),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('price')->money('idr', true)->sortable(),
                Tables\Columns\TextColumn::make('creator.name')->label('Created By')->sortable(),
                Tables\Columns\TextColumn::make('updater.name')->label('Updated By')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
                Tables\Columns\TextColumn::make('deleted_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
                Tables\Actions\Action::make('forceDelete')
                    ->label('Force Delete')
                    ->requiresConfirmation()
                    ->color('danger')
                    ->action(fn($record) => $record->forceDelete()),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    // -------------------------
    public static function getRelations(): array
    {
        return [];
    }

    // -------------------------
    public static function getPages(): array
    {
        return [
            'index' => ListProducts::route('/'),
            'create' => CreateProduct::route('/create'),
            'edit' => EditProduct::route('/{record}/edit'),
        ];
    }

    // -------------------------
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}
