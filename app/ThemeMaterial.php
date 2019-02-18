<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThemeMaterial extends Model
{
    protected $fillable = ['character_type'];

    public function theme(){
        return $this->belongsTo('App\Theme');
    }

    public function material(){
        return $this->belongsTo('App\Material');
    }
}
