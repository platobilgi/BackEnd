<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->date('issue_date')->nullable();
            $table->decimal('fee',12,4);
            $table->decimal('paid',12,4);

            $table->tinyInteger('vat')->nullable();
            $table->integer('status_id');
            $table->date('expiry_date')->nullable();
            $table->integer('suppliers_id')->nullable();
            $table->integer('workers_id')->nullable();
            $table->text('invoice_image')->nullable();
            $table->integer('users_id');
            $table->integer('types_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
