<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function create()
    {
        return view('video.create');
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'tag' => 'required'
        ]);
        $video = Video::create([
            'name' => $attributes['name']
        ]);
        $video->tags()->create([

            'name' => $attributes['tag']
        ]);
        return back();
    }
}
