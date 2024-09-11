<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['tg_bot_token', 'tg_chat_id', 'tg_support', 'default_full_video_link', 'payout_api_key', 'price'];
}
