<?php

use Illuminate\Database\Migrations\Migration;

class CreateRolesperheroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('roles_per_hero', function($table)
        {
            $table->increments('id');
            $table->integer('hero_id');
            $table->integer('role_id');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('roles_per_hero');
	}

}