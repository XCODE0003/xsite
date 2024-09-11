<?php

namespace App\Filament\Resources\SettingResource\Pages;

use App\Filament\Resources\SettingResource;
use App\Models\Setting;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\View\View;

class ListSettings extends ListRecords
{
    protected static string $resource = SettingResource::class;
    public function mount(): void
    {
        $setting = Setting::query()->first()->id;
        redirect('/user/settings/'. $setting .'/edit');
    }



    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
