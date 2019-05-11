<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title','question_value','teacher_id','quiz_id','question_type_id'];

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
        return $this->belongsToMany('App\Theme','question_themes','question_id','theme_id');
    }

    public function studentQuizResults(){
        return $this->hasMany('App\StudentQuizResult');
    }
}
