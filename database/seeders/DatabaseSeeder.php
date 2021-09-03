<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CourseSeeder;
use Database\Seeders\MethodpaySeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\VideoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $courses = new CourseSeeder();
        $methods = new MethodpaySeeder();
        $roles = new RoleSeeder();
        $videos = new VideoSeeder();

        $roles->run();
        $methods->run();
        $courses->run();
        $videos->run();

    }
}
