<?php

namespace App\Models\Back\Stock;

use Illuminate\Database\Eloquent\Model;

class stocks extends Model
{
    protected $table ='stocks';
    protected $fillable = ['id', 'description', 'customers_id', 'suppliers_id', 'address','cities_id','states_id','dateOfIssue','waybillNumber','shipmentDate','products_id','amount','unit','users_id','types_id'];
    public $timestamps = false;
}
