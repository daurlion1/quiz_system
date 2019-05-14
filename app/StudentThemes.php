<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentThemes extends Model
{
    protected $fillable = ['theme_id', 'amount_percent', 'show', 'student_quiz_id'];

    public function question(){
        return $this->belongsTo('App\Theme');
    }

    public function studentQuiz(){
        return $this->belongsTo('App\StudentQuiz');
    }
}
