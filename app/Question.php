<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title','question_value'];

    public function quiz(){
        return $this->belongsTo('App\Quiz');
    }

    public function  questionType(){
        return $this->belongsTo('App\QuestionType');
    }

    public function answers(){
        return $this->hasMany('App\Answer');
    }

    public function themes(){
        return $this->belongsToMany('App\Theme');
    }

    public function studentQuizResults(){
        return $this->hasMany('App\StudentQuizResult');
    }
}
