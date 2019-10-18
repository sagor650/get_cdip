<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('batches')->insert([
            'name'=>'01',
            'course_id'=>'1',

        ]);
//        DB::table('batches')->insert([
//            'name'=>'02',
//            'user_id'=>'',
//            'course_id'=>'1',
//
//        ]);
//        DB::table('batches')->insert([
//            'name'=>'03',
//            'user_id'=>'',
//            'course_id'=>'1',
//
//        ]);
    }
}
