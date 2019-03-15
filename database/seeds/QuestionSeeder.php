<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('title'=>'Каких списков нет в текстовом редакторе?',
                'question_value'=> '1',
                'quiz_id' => '1', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
            array('title'=>'При задании параметров страницы в текстовом редакторе устанавливаются:',
                'question_value'=> '1',
                'quiz_id' => '1', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
            array('title'=>' Какую комбинацию клавиш следует применить, чтобы вставить в документ сегодняшнюю дату?',
                'question_value'=> '1',
                'quiz_id' => '1', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
            array('title'=>'Какое из этих утверждений правильное?',
                'question_value'=> '1',
                'quiz_id' => '1', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
            array('title'=>'Какое из этих утверждений неправильное?',
                'question_value'=> '1',
                'quiz_id' => '1', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
            array('title'=>'На какую клавишу нужно нажать, чтобы напечатать запятую, когда на компьютере установлен английский алфавит?',
                'question_value'=> '1',
                'quiz_id' => '1', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
            array('title'=>'Колонтитул – это:',
                'question_value'=> '1',
                'quiz_id' => '1', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
            array('title'=>'Чтобы в текстовый документ вставить ссылку, нужно перейти по следующим вкладкам:',
                'question_value'=> '1',
                'quiz_id' => '1', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
            array('title'=>'Тест. Какой шрифт по умолчанию установлен в Word 2007?',
                'question_value'=> '1',
                'quiz_id' => '1', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
            array('title'=>'В верхней строке панели задач изображена иконка с дискетой. Что произойдет, если на нее нажать?',
                'question_value'=> '1',
                'quiz_id' => '1', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
        );
        DB::table('questions')->insert($data);
    }
}
