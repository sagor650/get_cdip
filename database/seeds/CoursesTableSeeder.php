<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name'=>'Laravel',
            'details'=>'Be a BOSS on laravel.',



        ]);
        DB::table('courses')->insert([
            'name'=>'Android',
            'details'=>'Get start with Android.',


        ]);
        DB::table('courses')->insert([
            'name'=>'Python',
            'details'=>'Be a BOSS on Python.',


        ]);
    }
}
