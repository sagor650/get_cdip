<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=>'1',
            'name'=>'Admin',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678'),
            'gender'=>'male',



        ]);
        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Instructor',
            'username'=>'instructor',
            'email'=>'instructor@gmail.com',
            'gender'=>'male',
            'password'=>bcrypt('12345678'),

        ]);

        DB::table('users')->insert([
            'role_id'=>'3',
            'name'=>'student',
            'username'=>'student',
            'email'=>'student@gmail.com',
            'gender'=>'male',
            'password'=>bcrypt('12345678'),
            'course_id'=>'1',
            'batch_id'=>'1',

        ]);
    }
}
