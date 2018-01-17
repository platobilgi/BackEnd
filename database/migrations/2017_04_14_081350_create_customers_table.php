<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',70);
            $table->string('short_name',25)->nullable();
            $table->string('email',70)->nullable();
            $table->string('phone_number',14)->nullable();
            $table->string('fax',14)->nullable();
            $table->string('iban',38)->nullable();
            $table->text('address')->nullable();
            $table->integer('cities_id');
            $table->integer('states_id');
            $table->integer('types_id');
            $table->string('tax_number',20)->nullable();
            $table->string('tax_administration',50)->nullable();
            $table->decimal('balance',10,4)->default(0);
            $table->integer('users_id');
            $table->string('identification_number',20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
