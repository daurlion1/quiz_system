<?php

use Illuminate\Database\Seeder;
use App\Quiz;


class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('title'=>'Информатика', 'teacher_id'=> '1',
                'subject_id' => '1', 'isPsychological' => '0',
                'created_at' => now(), 'updated_at' => now()),
            array('title'=>'Определение характера', 'teacher_id'=> null,
                'subject_id' => null, 'isPsychological' => '1',
                'created_at' => now(), 'updated_at' => now()),
        );
        DB::table('quizzes')->insert($data);
    }
}
