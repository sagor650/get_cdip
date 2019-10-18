<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documents')->insert([
            'name'=>'class 1',
            'description'=>'This is class 1 description.In the 1 st class we talk about php language.',
            'batch_id'=>'01',
        ]);

        DB::table('documents')->insert([
            'name'=>'class 2',
            'description'=>'This is class 2 description.In the 2nd class we talk about php language.',
            'batch_id'=>'01',
        ]);

        DB::table('documents')->insert([
            'name'=>'class 3',
            'description'=>'This is class 3 description.In the 3rd class we talk about php language.',
            'batch_id'=>'01',
        ]);
    }
}
