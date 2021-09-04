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
            'title' => 'intro',
            'episode' => '1',
            'duration' => '3:40 min',
            'thumbnail' => 'image',
            'description' => 'description',
            'video_link' => 'https://player.vimeo.com/video/582028664?h=eece6d507b&color=44A36F&title=0&byline=0&portrait=0',
        ]);

        DB::table('videos')->insert([
            'course_id' => $first_course_id,
            'title' => 'Rick Astley - Never Gonna Give You Up',
            'episode' => '1',
            'duration' => '3:40 min',
            'thumbnail' => 'image',
            'description' => 'description',
            'video_link' => 'https://player.vimeo.com/video/148751763?h=1e9ea2a314',
        ]);

        DB::table('videos')->insert([
            'course_id' => $first_course_id,
            'title' => 'SAAV - TMG (Feat. Guevara) [Short Film]',
            'episode' => '2',
            'duration' => '10:40 min',
            'thumbnail' => 'image',
            'description' => 'description',
            'video_link' => 'https://player.vimeo.com/video/466937426?h=c9e02885ce&color=22eaaa&title=0&byline=0&portrait=0',
        ]);

        DB::table('videos')->insert([
            'course_id' => $first_course_id,
            'title' => 'Jomox Alpha Base Drum Machine',
            'episode' => '3',
            'duration' => '8:40 min',
            'thumbnail' => 'image',
            'description' => 'description',
            'video_link' => 'https://player.vimeo.com/video/249565676?h=47013cc027',
        ]);

        DB::table('videos')->insert([
            'course_id' => $first_course_id,
            'title' => 'Groundwater and the Drought: How the West Is Miscounting Water Supplies',
            'episode' => '4',
            'duration' => '1:40 min',
            'thumbnail' => 'image',
            'description' => 'description',
            'video_link' => 'https://player.vimeo.com/video/129565826?h=09a6a37c68',
        ]);
        DB::table('videos')->insert([
            'course_id' => $first_course_id,
            'title' => 'Way of Giants - Caminho dos Gigantes',
            'episode' => '4',
            'duration' => '1:40 min',
            'thumbnail' => 'image',
            'description' => 'description',
            'video_link' => 'https://player.vimeo.com/video/302154312?h=ad06a49e3c&color=969696',
        ]);
        DB::table('videos')->insert([
            'course_id' => $first_course_id,
            'title' => 'Dolomites',
            'episode' => '4',
            'duration' => '1:40 min',
            'thumbnail' => 'image',
            'description' => 'description',
            'video_link' => 'https://player.vimeo.com/video/285854272?h=f33c46bdd0',
        ]);
        DB::table('videos')->insert([
            'course_id' => $first_course_id,
            'title' => 'MichaelaJae - The Adulthood - Google',
            'episode' => '4',
            'duration' => '1:40 min',
            'thumbnail' => 'image',
            'description' => 'description',
            'video_link' => 'https://player.vimeo.com/video/580799106?h=a8eb717af9',
        ]);
        DB::table('videos')->insert([
            'course_id' => $first_course_id,
            'title' => 'KIRboard Cat',
            'episode' => '4',
            'duration' => '1:40 min',
            'thumbnail' => 'image',
            'description' => 'description',
            'video_link' => 'https://player.vimeo.com/video/7466309?h=eca17c0f9a',
        ]);
        DB::table('videos')->insert([
            'course_id' => $first_course_id,
            'title' => 'Cat Walk',
            'episode' => '4',
            'duration' => '1:40 min',
            'thumbnail' => 'image',
            'description' => 'description',
            'video_link' => 'https://player.vimeo.com/video/89380851?h=3c6b92949d',
        ]);
        DB::table('videos')->insert([
            'course_id' => $first_course_id,
            'title' => 'Nature',
            'episode' => '4',
            'duration' => '1:40 min',
            'thumbnail' => 'image',
            'description' => 'description',
            'video_link' => 'https://player.vimeo.com/video/112836958?h=d4a3a50265',
        ]);


    }
}
