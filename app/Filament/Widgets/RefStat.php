<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class RefStat extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Кол-во ваших рефералов', '192.1k'),
        ];
    }
}
