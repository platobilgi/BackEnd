<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateinvoicesContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('products_id');
            $table->integer('invoices_id');
            $table->integer('stock');
            $table->string('units',50)->nullable();
            $table->decimal('unit_price',12,4);
            $table->tinyInteger('tax');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices_contents');
    }
}
