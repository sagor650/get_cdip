<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'qus_title'=>'How to get sublist from list of objects with condition like sum of a object property of object is less than or equal to threshold value using stream?	',
            'view_count'=>'1',
            'like_count'=>'0',
            'user_id'=>'3',
            'course_id'=>'1',
        ]);
        DB::table('questions')->insert([
            'qus_title'=>'Why doesn\'t NumPy\'s ndarray class follow the naming convention?	',
            'view_count'=>'20',
            'like_count'=>'1',
            'user_id'=>'3',
            'course_id'=>'1',
        ]);
        DB::table('questions')->insert([
            'qus_title'=>'Finding unknown values in Python	',
            'view_count'=>'13',
            'like_count'=>'2',
            'user_id'=>'3',
            'course_id'=>'1',
        ]);
    }
}
