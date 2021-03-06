<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('question_value');
            $table->integer('quiz_id')->unsigned();
            $table->foreign('quiz_id')
                ->references('id')
                ->on('quizzes');
            $table->integer('question_type_id')->unsigned();
            $table->foreign('question_type_id')
            ->references('id')
            ->on('question_types');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
