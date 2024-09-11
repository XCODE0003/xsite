<?php

namespace App\Filament\Resources\PayotResource\Pages;

use App\Filament\Resources\PayotResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPayots extends ListRecords
{
    protected static string $resource = PayotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
