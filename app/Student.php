<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['character_type', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function studentQuizzes(){
        return $this->hasMany('App\StudentQuiz');
    }
}
