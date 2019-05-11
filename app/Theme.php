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
        return $this->belongsToMany('App\Question','question_themes','theme_id','question_id');
    }

    public function materialThemes(){
        return $this->hasMany('App\ThemeMaterial');
    }
}
