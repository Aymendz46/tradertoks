<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Watched;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function index()
    {
        $course = Course::first();
        $videos = $course->videos()->get();

        return view('videos.videos', ['videos' => $videos]);
    }

    public function watched(Request $request)
    {
        $if_watched = Auth()->user()->watched()->where('video_id', $request->video_id)->count();
        //if student hasnt watched it yet
        if($if_watched == 0) 
        {
            $watched = new Watched();
            $watched->user_id = Auth()->user()->id;
            $watched->video_id = $request->video_id;
            $watched->save();

            return response()->json('saved');       //i may take this off 
        }

        return response()->json('already save');    //i may take this off 

    }

    
}
