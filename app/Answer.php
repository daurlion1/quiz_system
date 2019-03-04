<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['content','right','question_id'];

    public function question(){
        return $this->belongsTo('App\Question');
    }

    public function studentQuizResults(){
        return $this->hasMany('App\StudentQuizResult');
    }
}
