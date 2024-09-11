<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoResource\Pages;
use App\Filament\Resources\VideoResource\RelationManagers;
use App\Models\Setting;
use App\Models\Video;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VideoResource extends Resource
{
    protected static ?string $model = Video::class;
    protected static ?string $navigationLabel = 'Видео';
    protected static ?string $pluralLabel = 'Видео';
    public static function canAccess(): bool
    {
        return auth()->user()->isAdmin;
    }
    protected static ?string $navigationIcon = 'heroicon-o-video-camera';
    protected static ?string $label = 'Видео';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Название')
                    ->required(),
                Forms\Components\TextInput::make('full_video_link')
                    ->label('Ссылка на видео продолжение видео')
                    ->default(Setting::query()->first()->default_full_video_link ?? '')
                    ->required(),
                Forms\Components\TextInput::make('second_locked')
                    ->label('Таймлайн блокировки')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->label('Описание')
                    ->required(),
                Forms\Components\FileUpload::make('file_video')
                    ->label('Видео')
                    ->required(),
                Forms\Components\FileUpload::make('preview')
                    ->label('Превью')
                    ->required(),
                Forms\Components\Select::make('category_id')
                    ->label('Категория')
                    ->options(\App\Models\Category::all()->pluck('name', 'id')->toArray())
                    ->required(),

            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('full_video_link')
                    ->label('Ссылка на видео продолжение видео')

                    ->searchable(),
                Tables\Columns\TextColumn::make('second_locked')
                    ->label('Таймлайн блокировки')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Описание')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListVideos::route('/'),
            'create' => Pages\CreateVideo::route('/create'),
            'edit' => Pages\EditVideo::route('/{record}/edit'),
        ];
    }
}
