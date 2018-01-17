<?php

namespace App\Models\Front\Config;

use Illuminate\Database\Eloquent\Model;

class menus extends Model
{
    protected $table ='menus';
    public $timestamps = false;


    public function menus_subs(){
        return $this->hasMany('App\Models\Front\Config\menusSubs');
    }

}
