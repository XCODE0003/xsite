<?php

namespace App\Services\Filament\Actions;

use AnourValar\EloquentSerialize\Tests\Models\Post;
use App\Models\Setting;
use Closure;
use Filament\Actions\Concerns\CanCustomizeProcess;
use Filament\Forms\Components\Select;
use Filament\Support\Facades\FilamentIcon;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Arr;

class BuySub
{
    public function index($data, $referral)
    {
        $setting = Setting::query()->first();
        $user = auth()->user();
        $user->balance -= $setting->price;
        if ($referral->subscription_end === null) {
            $referral->subscription_end = now()->addDays(30);
        } else {
            $referral->subscription_end->addDays(30);
        }


        $referral->save();
        $user->save();
        return $referral;
    }
}
