<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['title','extension', 'theme_id'];

    public function theme(){
        return $this->belongsTo('App\Theme');
    }
}
