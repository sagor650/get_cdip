<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Assignment_submitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assignment_submits')->insert([
            'file' => 'file.php',
            'assignment_id'=>'1',
            'user_id'=>'3',

        ]);
        DB::table('assignment_submits')->insert([
            'file' => 'file.php',
            'assignment_id'=>'2',
        ]);

    }
}
