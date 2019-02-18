<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')
                ->references('id')
                ->on("teachers");
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')
            ->references('id')
            ->on('subjects');
            $table->boolean('isPsychological')->default(false);
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
        Schema::dropIfExists('quizzes');
    }
}
