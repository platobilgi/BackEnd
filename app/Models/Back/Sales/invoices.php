<?php

namespace App\Models\Back\Sales;

use Illuminate\Database\Eloquent\Model;

class invoices extends Model
{
    protected $fillable = ['id', 'description', 'customers_id', 'dateOfIssue', 'expiryDate','serialNumber','rowNumber','currency','exchangeRate','invoiceType','users_id','fee','paid','yaz_id','pay_id','status_id'];

    protected $table ='invoices';
    public $timestamps=False;

    public function contents(){
        return $this->hasMany('App\Models\Back\Sales\invoicesContents');
    }
    public function payments(){
        return $this->hasMany('App\Models\Back\Sales\payments');
    }

}
