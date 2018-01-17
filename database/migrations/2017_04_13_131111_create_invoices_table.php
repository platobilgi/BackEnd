<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateinvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description')->nullable();
            $table->integer('customers_id');
            $table->date('dateOfIssue')->nullable();
            $table->date('expiryDate')->nullable();
            $table->string('serialNumber',25)->nullable();
            $table->string('rowNumber',25)->nullable();
            $table->string('currency',3);
            $table->decimal('exchangeRate',12,4);
            $table->tinyInteger('invoiceType')->default(0);
            $table->integer('users_id');
            $table->decimal('fee',12,4);
            $table->decimal('paid',12,4)->nullable();
            $table->integer('yaz_id')->default(0);
            $table->integer('pay_id')->default(0);
            $table->integer('status_id')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
