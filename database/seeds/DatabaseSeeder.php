<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CoursesTableSeeder::class);
        $this->call(BatchesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(AssignmentsTableSeeder::class);
        $this->call(Assignment_submitsTableSeeder::class);
        $this->call(DocumentsTableSeeder::class);
        $this->call(DocumentAttachmentsTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(AnswersTableSeeder::class);

    }
}
