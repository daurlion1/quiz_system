<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['title'];

    public function themeMaterials(){
        return $this->hasMany('App\ThemeMaterial');
    }
}