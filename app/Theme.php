<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = ['name','subject_id'];

    public function subject(){
        return $this->belongsTo('App\Subject');
    }

    public function questions(){
        return $this->belongsToMany('App\Question');
    }

    public function materials(){
        return $this->hasMany('App\Material');
    }
}
