<?php

namespace App\Models\Back\Config;

use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    protected $table ='cities';

    public function states(){
        return $this->hasMany('App\Models\Back\Config\states');
    }

}
