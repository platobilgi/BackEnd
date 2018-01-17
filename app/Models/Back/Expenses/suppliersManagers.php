<?php

namespace App\Models\Back\Expenses;

use Illuminate\Database\Eloquent\Model;

class suppliersManagers extends Model
{
    protected $fillable = ['id', 'name', 'email', 'phone_number', 'notes','fax','suppliers_id'];

    protected $table ='suppliers_managers';
    public $timestamps = false;


}
