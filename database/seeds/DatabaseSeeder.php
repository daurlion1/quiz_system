<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
//         $this->call(DepartmentsTableSeeder::class);
//         $this->call(TeachersTableSeeder::class);
//         $this->call(QuestionTypesTableSeeder::class);
//         $this->call(SubjectsTableSeeder::class);
//         $this->call(QuizSeeder::class);
//         $this->call(QuestionSeeder::class);
         $this->call(AnswerSeeder::class);
    }
}
