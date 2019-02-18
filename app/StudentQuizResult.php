<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentQuizResult extends Model
{
    public function question(){
        return $this->belongsTo('App\Question');
    }

    public function answer(){
        return $this->belongsTo('App\Answer');
    }

    public function studentQuiz(){
        return $this->belongsTo('App\StudentQuiz');
    }
}
