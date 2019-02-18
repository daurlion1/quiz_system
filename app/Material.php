<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['material'];

    public function themeMaterials(){
        return $this->hasMany('App\ThemeMaterial');
    }
}
