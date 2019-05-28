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
             array('title'=>'Люблю наблюдать за облаками и звездами',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Часто напеваю себе потихоньку',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Не признаю моду, которая неудобна',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Люблю ходить в сауну',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'В автомашине цвет для меня имеет значение',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Узнаю по шагам, кто вошел в помещение',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Меня развлекает подражание диалектам',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Внешнему виду придаю серьезное значение',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Мне нравится принимать массаж',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Когда есть время, люблю наблюдать за людьми',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Плохо себя чувствую, когда не наслаждаюсь движением',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Видя одежду в витрине, знаю, что мне будет хорошо в ней',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Когда услышу старую мелодию, ко мне возвращается прошлое',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Люблю читать во время еды',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Люблю поговорить по телефону',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'У меня есть склонность к полноте',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Предпочитаю слушать рассказ, который кто-то читает, чем читать самому',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'После плохого дня мой организм в напряжении',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Охотно и много фотографирую',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Долго помню, что мне сказали приятели или знакомые',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Легко могу отдать деньги за цветы, потому что они украшают жизнь',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Вечером люблю принять горячую ванну',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Стараюсь записывать свои личные дела',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Часто разговариваю с собой',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'После длительной езды на машине долго прихожу в себя',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Тембр голоса многое мне говорит о человеке',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Придаю значение манере одеваться, свойственной другим',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Люблю потягиваться, расправлять конечности, разминаться',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Слишком твердая или слишком мягкая постель для меня мука',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Мне нелегко найти удобную обувь',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Люблю смотреть теле- и видеофильмы',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Даже спустя годы могу узнать лица, которые когда-либо видел',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Люблю ходить под дождем, когда капли стучат по зонтику',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Люблю слушать, когда говорят',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Люблю заниматься подвижным спортом или выполнять какие-либо двигательные упражнения, иногда и потанцевать',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Когда близко тикает будильник, не могу уснуть',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'У меня неплохая стереоаппаратура',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Когда слушаю музыку, отбиваю такт ногой',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'На отдыхе не люблю осматривать памятники архитектуры',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Не выношу беспорядок',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Не люблю синтетических тканей',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Считаю, что атмосфера в помещении зависит от освещения',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Часто хожу на концерты',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Пожатие руки много говорит мне о данной личности',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Охотно посещаю галереи и выставки',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Серьезная дискуссия – это интересно',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'Через прикосновение можно сказать значительно больше, чем словами',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),
                    array('title'=>'В шуме не могу сосредоточиться',
                'question_value'=> '1',
                'quiz_id' => '2', 'question_type_id' => '1',
                'created_at' => now(), 'updated_at' => now()),

        );
        DB::table('questions')->insert($data);
    }
}
