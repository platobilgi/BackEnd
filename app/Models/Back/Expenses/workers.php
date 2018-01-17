<?php

namespace App\Models\Back\Expenses;

use Illuminate\Database\Eloquent\Model;

class workers extends Model
{   protected $fillable = ['name', 'email', 'iban', 'balance', 'users_id'];

    protected $table ='workers';
    public $timestamps = false;


}
