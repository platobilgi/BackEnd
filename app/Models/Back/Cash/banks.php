<?php

namespace App\Models\Back\Cash;

use Illuminate\Database\Eloquent\Model;

class banks extends Model
{
    protected $table ='banks';
    protected $fillable = ['id', 'description', 'balance', 'iban', 'users_id'];
    public $timestamps = false;

}
