<?php

use Illuminate\Database\Migrations\Migration;

class CreateCountersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('counters', function($table)
        {
            $table->increments('id');
            $table->integer('hero_id');
            $table->integer('counter_id');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('counters');
	}

}