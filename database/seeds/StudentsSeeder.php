<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::insert([
            [
                'character_type'           => 'Аудиал',
                'user_id'          => '1',
            ],
        ]);
    }
}
