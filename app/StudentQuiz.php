<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentQuiz extends Model
{
    protected $fillable = ['student_id', 'quiz_id', 'accepted', 'result'];

    public function quiz(){
        return $this->belongsTo('App\Quiz');
    }

    public function student(){
        return $this->belongsTo('App\Student');
    }

    public function studentQuizResults(){
        return $this->hasMany('App\StudentQuizResult');
    }
}
