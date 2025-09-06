<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;

// Gunakan namespace Actions yang benar untuk Filament v3+
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\Action; // untuk custom per-record action (force delete)
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\RestoreBulkAction;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(
                        fn($state, $record) => ($record && method_exists($record, 'trashed') && $record->trashed())
                            ? 'Deleted'
                            : 'Active'
                    )
                    ->colors([
                        'danger' => fn($state) => $state === 'Deleted',
                        'success' => fn($state) => $state === 'Active',
                    ]),

                TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
                RestoreAction::make(),

                // Custom per-record Force Delete
                Action::make('forceDelete')
                    ->label('Force Delete')
                    ->requiresConfirmation()
                    ->color('danger')
                    ->action(fn($record) => $record->forceDelete()),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                    // Bisa tambahkan custom bulk force delete kalau perlu
                ]),
            ]);
    }
}
