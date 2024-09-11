<?php

namespace App\Filament\Resources\UserResource\Widgets;

use AnourValar\EloquentSerialize\Tests\Models\Post;
use App\Models\User;
use App\Services\Filament\Actions\BuySub;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RefUsers extends BaseWidget
{
    protected static ?string $heading = 'Рефералы';

    public function table(Table $table): Table
    {

        return $table
            ->query(
                User::query()
                    ->where('referral_user', auth()->id())
            )
            ->columns([
                Tables\Columns\TextColumn::make('username')
                    ->label('Имя')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Дата регистрации')
                    ->searchable()
                    ->sortable(),
            ])->actions([
                Action::make('BuySub')
                    ->action(function (array $data, User $record): void {
                        (new BuySub())->index($data, $record);
                    })->label('Купить подписку на 30 дней')
                    ->requiresConfirmation()->hidden(auth()->user()->balance < 300),
            ]);
    }
}
