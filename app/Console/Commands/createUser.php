<?php

namespace App\Console\Commands;

use Filament\Commands\MakeUserCommand;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;
use function Laravel\Prompts\text;

class createUser extends MakeUserCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected function getUserData(): array
    {
        return [
            'username' => $this->options['username'] ?? text(
                    label: 'username',
                    required: true,
                ),
            'password' => Hash::make($this->options['password'] ?? password(
                label: 'Password',
                required: true,
            )),
        ];
    }
    protected $signature = 'app:create-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */

}
