<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assignments')->insert([
            'name'=>'01',
            'details'=>'create the product details page',
            'dead_line'=>'2019-09-30',
            'instructor_attachment'=>'file.zip',
            'batch_id'=>'1',
        ]);

        DB::table('assignments')->insert([
            'name'=>'02',
            'details'=>'create the profile page',
            'dead_line'=>'2019-10-6',
            'instructor_attachment'=>'file.zip',
            'batch_id'=>'1',
        ]);

        DB::table('assignments')->insert([
            'name'=>'03',
            'details'=>'create the show cart page',
            'dead_line'=>'2019-10-3',
            'instructor_attachment'=>'file.zip',
            'batch_id'=>'1',
        ]);

        DB::table('assignments')->insert([
            'name'=>'04',
            'details'=>'create the anmin panel page',
            'dead_line'=>'2019-10-16',
            'instructor_attachment'=>'file.zip',
            'batch_id'=>'1',
        ]);

        DB::table('assignments')->insert([
            'name'=>'05',
            'details'=>'create the product details page',
            'dead_line'=>'2019-10-19',
            'instructor_attachment'=>'file.zip',
            'batch_id'=>'1',
        ]);
    }
}
