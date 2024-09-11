<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;
    protected static ?string $navigationLabel = 'Настройки';
    protected static ?string $pluralLabel = 'Настройки';
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    public static function canAccess(): bool
    {
        return auth()->user()->isAdmin;
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tg_bot_token')->label('Telegram Bot Token'),
                Forms\Components\TextInput::make('tg_chat_id')->label('Telegram Chat ID'),
                Forms\Components\TextInput::make('tg_support')->label('Telegram Support'),
                Forms\Components\TextInput::make('default_full_video_link')->label('Ссылка по стандарту на полное видео'),
                Forms\Components\TextInput::make('payout_api_key')->label('API ключ платежной системы'),
                Forms\Components\TextInput::make('price')->label('Цена за месяц подписки'),

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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
