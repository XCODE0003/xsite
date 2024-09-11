<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'full_video_link', 'second_locked', 'category_id', 'description', 'file_video', 'timeline', 'preview'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
