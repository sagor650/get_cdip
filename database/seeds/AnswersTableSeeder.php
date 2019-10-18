<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            'answer'=>'Because the expression assigned to isSafe is evaluated when the fragment instance is constructed and remains unchanged after that, while the return value of isSafe() is evaluated anew each time it is called.',

            'question_id'=>'1',
        ]);
        DB::table('answers')->insert([
            'answer'=>' After 8 hours of trying this and that I found an option in Google Apps. Go to Security -> Advanced -> Check "Allow users to manage their security settings" (it was disabled). Now it works, oh gosh.',
            'question_id'=>'1',
        ]);
        DB::table('answers')->insert([
            'answer'=>'Not exactly sure which options the answer Ivan provided is referring to. They don\'t appear in my non-gapps account perhaps due to a UI update.',
            'question_id'=>'1',
        ]);
    }
}
