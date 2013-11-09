<?php

use Illuminate\Database\Migrations\Migration;

class CreateHeroesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('heroes', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->boolean('is_ranged');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('heroes');
	}

}