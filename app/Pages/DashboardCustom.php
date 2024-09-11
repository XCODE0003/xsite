<?php

namespace App\Pages;

use App\Filament\Resources\UserResource\Widgets\RefUsers;
use App\Filament\Widgets\AccountOverview;
use App\Filament\Widgets\Referall;
use App\Filament\Widgets\RefStat;
use Filament\Facades\Filament;
use Filament\Widgets\AccountWidget;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Panel;

class DashboardCustom extends BaseDashboard
{
    protected static ?string $title = 'Личный кабинет';
    public function getColumns(): int | string | array
    {
        return 1;
    }

    public function getWidgets(): array
    {
        return [AccountOverview::class, Referall::class, RefUsers::class];
    }
}
