<?php

namespace App\Filament\Resources\PayotResource\Pages;

use App\Filament\Resources\PayotResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPayot extends EditRecord
{
    protected static string $resource = PayotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
