<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',75);
            $table->string('short_name',20)->nullable();
            $table->string('email',75)->nullable();
            $table->string('phone',14)->nullable();
            $table->string('fax',14)->nullable();
            $table->string('iban',38)->nullable();
            $table->text('address')->nullable();
            $table->integer('cities_id')->nullable();
            $table->integer('states_id')->nullable();
            $table->integer('types_id')->nullable();
            $table->string('tax_number',20)->nullable();
            $table->string('tax_administrator',50)->nullable();
            $table->string('identification_number',12)->nullable();
            $table->decimal('balance',12,4)->default(0);
            $table->integer('users_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
