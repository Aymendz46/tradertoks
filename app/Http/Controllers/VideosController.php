<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function index()
    {
        $course = Course::first();
        $videos = $course->videos()->get();

        return view('videos.videos', ['videos' => $videos]);
    }
}
