<?php

namespace App\Services\Base;

use App\Models\Video;

class index
{
    public function index()
    {
        $videos = Video::query()->paginate(30);
        return view('pages.index', compact('videos'));
    }
}
