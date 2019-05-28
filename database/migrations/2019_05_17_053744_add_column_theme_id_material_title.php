<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnThemeIdMaterialTitle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('questions', function (Blueprint $table) {
//            $table->integer('theme_id')->after('question_type_id')->unsigned();
//            $table->foreign('theme_id')->references('id')->on('themes');
//        });

        Schema::table('materials', function (Blueprint $table) {
            $table->string('name')->after('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
