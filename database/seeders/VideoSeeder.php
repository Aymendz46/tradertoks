<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $first_course_id = Course::first()->id;
        DB::table('videos')->insert([
            'course_id' => $first_course_id,
            'title' => 'video 1',
            'episode' => '1',
            'duration' => '3:40 min',
            'thumbnail' => 'image',
            'description' => 'description',
            'video_link' => 'video_link',
        ]);

        DB::table('videos')->insert([
            'course_id' => $first_course_id,
            'title' => 'video 2',
            'episode' => '2',
            'duration' => '10:40 min',
            'thumbnail' => 'image',
            'description' => 'description',
            'video_link' => 'video_link',
        ]);

        DB::table('videos')->insert([
            'course_id' => $first_course_id,
            'title' => 'video 3',
            'episode' => '3',
            'duration' => '8:40 min',
            'thumbnail' => 'image',
            'description' => 'description',
            'video_link' => 'video_link',
        ]);

        DB::table('videos')->insert([
            'course_id' => $first_course_id,
            'title' => 'video 4',
            'episode' => '4',
            'duration' => '1:40 min',
            'thumbnail' => 'image',
            'description' => 'description',
            'video_link' => 'video_link',
        ]);

    }
}
