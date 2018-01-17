<?php

namespace App\Models\Back\Expenses;

use Illuminate\Database\Eloquent\Model;

class expenses extends Model
{
    protected $fillable = ['id', 'description', 'issue_date', 'fee', 'vat','status_id','expiry_date','suppliers_id','workers_id','invoice_image','users_id','types_id'];

    protected $table ='expenses';
    public $timestamps = false;






}
