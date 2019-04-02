<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name','description'];

    public function quizzes(){
        return $this->hasMany('App\Quiz');
    }

    public function teachers(){
        return $this->belongsToMany('App\Teacher', 'teacher_subjects','subject_id','teacher_id');
    }

    public function themes(){
        return $this->hasMany('App\Theme');
    }
}
