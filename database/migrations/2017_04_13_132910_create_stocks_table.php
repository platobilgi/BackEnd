<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->integer('customers_id')->nullable();
            $table->integer('suppliers_id')->nullable();
            $table->text('address')->nullable();
            $table->integer('cities_id');
            $table->integer('states_id');
            $table->date('dateOfIssue');
            $table->string('waybillNumber',25)->nullable();
            $table->date('shipmentDate');
            $table->integer('products_id');
            $table->integer('amount');
            $table->string('unit',25)->nullable();
            $table->integer('users_id');
            $table->integer('types_id');
            $table->integer('invoices_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
