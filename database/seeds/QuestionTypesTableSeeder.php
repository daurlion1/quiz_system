<?php

use Illuminate\Database\Seeder;
use App\QuestionType;

class QuestionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        QuestionType::insert([
            [
                'name'  => 'Варианты',
            ],
        ]);
    }
}
