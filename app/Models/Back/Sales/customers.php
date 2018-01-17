<?php

namespace App\Models\Back\Sales;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $fillable = ['id', 'name', 'short_name', 'email', 'phone_number','fax','iban','address','cities_id','states_id','types_id','tax_number','tax_administration','balance','users_id'];
    protected $table ='customers';
    public $timestamps = false;
    public function customers_managers(){
        return $this->hasMany('App\Models\Back\Sales\customersManagers');
    }

}
