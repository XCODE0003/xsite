<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PayotResource\Pages;
use App\Filament\Resources\PayotResource\RelationManagers;
use App\Models\Payot;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PayotResource extends Resource
{
    protected static ?string $model = Payot::class;
    protected static ?string $navigationLabel = 'Пополнения';
    protected static ?string $pluralLabel = 'Пополнения';
    public static function canCreate(): bool
    {
        return false;
    }

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListPayots::route('/'),
            'create' => Pages\CreatePayot::route('/create'),
            'edit' => Pages\EditPayot::route('/{record}/edit'),
        ];
    }
}
