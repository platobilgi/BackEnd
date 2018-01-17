<?php

namespace App\Models\Back\Expenses;

use Illuminate\Database\Eloquent\Model;

class suppliers extends Model

{
    protected $fillable = ['id', 'name', 'short_name', 'email', 'phone','fax','iban','address','cities_id','states_id','types_id','tax_number','tax_administrator','indentification_number','balance','users_id'];

    protected $table ='suppliers';
    public $timestamps = false;


    public function cities(){
        return $this->hasMany('App\Models\Back\Config\cities');
    }
    public function states(){
        return $this->hasMany('App\Models\Back\Config\states');
    }
    public function types(){
        return $this->hasMany('App\Models\Back\Config\types');
    }
    public function suppliers_manager(){
        return $this->hasMany('App\Models\Back\Expenses\suppliersManagers');
    }
    public function expenses(){
        return $this->hasMany('App\Models\Back\Expenses\expenses');
    }


}
