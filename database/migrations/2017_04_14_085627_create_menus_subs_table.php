<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusSubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus_subs', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('sort_order');
            $table->string('title',75);
            $table->tinyInteger('is_enabled');
            $table->text('html')->nullable();
            $table->tinyInteger('type');
            $table->integer('menus_id');
            $table->text('url');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus_subs');
    }
}
