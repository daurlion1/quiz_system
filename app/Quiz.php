<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
  protected $fillable = ['title', 'teacher_id', 'subject_id'];

    protected $table = 'quizzes';

    public function teacher(){
        return $this->belongsTo('App\Teacher');
    }

    public function subject(){
        return $this->belongsTo('App\Subject');
    }

    public function questions(){
        return $this->hasMany('App\Question');
    }

    public function studentQuizzes(){
        return $this->hasMany('App\StudentQuiz');
    }


}
