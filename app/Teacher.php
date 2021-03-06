<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $fillable = ['name', 'user_id', 'department_id',];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function department(){
        return $this->belongsTo('App\Department');
    }

    public function quizzes(){
        return $this->hasMany('App\Quiz');
    }

    public function subjects(){
        return $this->belongsToMany('App\Subject', 'teacher_subjects', 'teacher_id', 'subject_id');
    }
}
