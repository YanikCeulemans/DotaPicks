<?php

use Illuminate\Database\Migrations\Migration;

class CreateCombosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('combos', function($table)
        {
            $table->increments('id');
            $table->integer('hero_id');
            $table->integer('combo_id');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('combos');
	}

}