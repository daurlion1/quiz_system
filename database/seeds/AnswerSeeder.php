<?php

use Illuminate\Database\Seeder;
use App\Answer;


class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('content'=>'нумерованных',
                'right'=> '0',
                'question_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'точечных',
                'right'=> '1',
                'question_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'маркированных',
                'right'=> '1',
                'question_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'поля, ориентация и размер страницы',
                'right'=> '1',
                'question_id' => '2',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'интервал между абзацами и вид шрифта',
                'right'=> '0',
                'question_id' => '2',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'фон и границы страницы, отступ',
                'right'=> '0',
                'question_id' => '2',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'Ctrl + Alt + A',
                'right'=> '0',
                'question_id' => '3',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'Shift + Ctrl + V',
                'right'=> '0',
                'question_id' => '3',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'Shift + Alt + D',
                'right'=> '1',
                'question_id' => '3',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'Кернинг – это изменение интервала между буквами одного слова.',
                'right'=> '1',
                'question_id' => '4',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'Если пароль к защищенному документу утрачен, его можно восстановить с помощью ключевого слова.',
                'right'=> '0',
                'question_id' => '4',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'Сочетание клавиш Shift + Home переносит на первую страницу документа.',
                'right'=> '0',
                'question_id' => '4',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'где написана русская буква Б',
                'right'=> '1',
                'question_id' => '6',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'где написана русская буква Ю',
                'right'=> '0',
                'question_id' => '6',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'где написана русская буква Ж',
                'right'=> '0',
                'question_id' => '6',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'область, которая находится в верхнем и нижнем поле и предназначается для помещения названия работы над текстом каждой страницы',
                'right'=> '1',
                'question_id' => '7',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'внешний вид печатных знаков, который пользователь видит в окне текстового редактора',
                'right'=> '0',
                'question_id' => '7',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'верхняя строка окна редактора Word, которая содержит в себе панель команд (например, «Вставка», «Конструктор», «Макет» и т. д.)',
                'right'=> '0',
                'question_id' => '7',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'Большую букву можно напечатать двумя способами.',
                'right'=> '0',
                'question_id' => '5',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'При помощи клавиши Tab можно сделать красную строку.',
                'right'=> '0',
                'question_id' => '5',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'Клавиша Delete удаляет знак перед мигающим курсором',
                'right'=> '1',
                'question_id' => '5',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'Вставка – Вставить ссылку – Создание источника',
                'right'=> '0',
                'question_id' => '8',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'Файл – Параметры страницы – Вставить ссылку',
                'right'=> '0',
                'question_id' => '8',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'Ссылки – Вставить ссылку – Добавить новый источник',
                'right'=> '1',
                'question_id' => '8',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'Times New Roman',
                'right'=> '0',
                'question_id' => '9',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'Calibri',
                'right'=> '1',
                'question_id' => '9',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'Microsoft Ya Hei',
                'right'=> '0',
                'question_id' => '9',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'документ удалится',
                'right'=> '0',
                'question_id' => '10',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'документ сохранится',
                'right'=> '1',
                'question_id' => '10',
                'created_at' => now(), 'updated_at' => now()),
            array('content'=>'документ запишется на диск или флешку, вставленные в компьютер',
                'right'=> '0',
                'question_id' => '10',
                'created_at' => now(), 'updated_at' => now()),
        );
        DB::table('answers')->insert($data);

    }
}