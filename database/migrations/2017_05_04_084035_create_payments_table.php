<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('types_id');
            $table->decimal('balance',12,4);
            $table->integer('users_id');
            $table->integer('customers_id')->nullable();
            $table->integer('suppliers_id')->nullable();
            $table->integer('invoices_id')->nullable();
            $table->date('issue_date');
            $table->integer('banks_id')->nullable();
            $table->integer('workers_id')->nullable();
            $table->integer('expenses_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');

    }
}
