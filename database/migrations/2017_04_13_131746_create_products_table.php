<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name','50');
            $table->string('code','25')->nullable();
            $table->tinyInteger('tracking');
            $table->integer('amount');
            $table->string('unit',25)->nullable();
            $table->decimal('purchasePrice',12,4);
            $table->decimal('salePrice',12,4);
            $table->tinyInteger('valuAddedTax');
            $table->tinyInteger('specialCommunicationTax')->nullable();
            $table->tinyInteger('specialConsumptionTaxSale')->nullable();
            $table->tinyInteger('specialConsumptionTaxPurchase')->nullable();
            $table->integer('users_id');






        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
