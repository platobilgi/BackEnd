<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone_number',14);
            $table->text('address');
            $table->text('facebook');
            $table->text('twitter');
            $table->text('linkedin');
            $table->text('skype');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statics');
    }
}
