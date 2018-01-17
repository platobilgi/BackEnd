<?php

namespace App\Models\Back\Config;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table ='users';
    public $timestamps = false;


    public function banks(){
        return $this->hasMany('App\Models\Back\Cash\banks');
    }
    public function safes(){
        return $this->hasMany('App\Models\Back\Cash\safe');
    }
    public function customers(){
        return $this->hasMany('App\Models\Back\Sales\customers');
    }
    public function expenses(){
        return $this->hasMany('App\Models\Back\Expenses\expenses');
    }
    public function invoices(){
        return $this->hasMany('App\Models\Back\Sales\invoices');
    }
    public function products(){
        return $this->hasMany('App\Models\Back\Stock\products');
    }
    public function stocks(){
        return $this->hasMany('App\Models\Back\Stock\stocks');
    }
    public function suppliers(){
        return $this->hasMany('App\Models\Back\Expenses\suppliers');
    }
    public function workers(){
        return $this->hasMany('App\Models\Back\Expenses\workers');
    }
    public function payments(){
        return $this->hasMany('App\Models\Back\Sales\payments');
    }
}
