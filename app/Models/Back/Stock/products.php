<?php

namespace App\Models\Back\Stock;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = ['id', 'name', 'code', 'tracking', 'amount','unit','purchasePrice','salePrice','valuAddedTax','specialCommunicationTax','specialConsumptionTaxSale','specialConsumptionTaxPurchase','users_id'];
    protected $table ='products';
    public $timestamps = false;

}
