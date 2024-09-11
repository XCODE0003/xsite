<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Services\Base\index;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        return (new index())->index();
    }
    public function search(Request $request)
    {
        $search = $request->get('story');
        $videos = Video::query()->where('name', 'like', "%$search%")->paginate(10);
        return view('pages.search', compact('videos', 'search'));
    }

    public function category($id)
    {
        $videos = Video::query()->where('category_id', $id)->paginate(30);
        if(empty($videos)){
            return redirect('/');
        }
        return view('pages.index', compact('videos'));
    }
    public function video($id)
    {
        $video = Video::query()->where('id', $id)->with('category')->first()->toArray();
        $videos_15 = Video::query()->inRandomOrder()->limit(15)->get()->toArray();
        return view('pages.video', compact('video', 'videos_15'));

    }
}
