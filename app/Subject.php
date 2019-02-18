<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name'];

    public function quizzes(){
        return $this->hasMany('App\Quiz');
    }

    public function teachers(){
        return $this->belongsToMany('App\Teacher');
    }

    public function themes(){
        return $this->hasMany('App\Theme');
    }
}
