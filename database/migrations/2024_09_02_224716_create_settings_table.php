<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('tg_bot_token')->nullable();
            $table->string('tg_chat_id')->nullable();
            $table->string('tg_support')->nullable();
            $table->string('default_full_video_link')->nullable();
            $table->string('payout_api_key')->nullable();
            $table->string('price')->nullable();
            $table->timestamps();
        });

        \App\Models\Setting::query()->create([
            'tg_bot_token' => '',
            'tg_chat_id' => '',
            'tg_support' => '',
            'default_full_video_link' => '',
            'payout_api_key' => '',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
