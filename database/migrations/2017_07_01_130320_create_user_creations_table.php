<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateuserCreationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_creations', function(Blueprint $table) {
            $table->increments('id');
            $table->string('emp_name');
            $table->string('user_name');
            $table->string('password');
            $table->string('confirm_password');
            $table->string('role');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_creations');
	}

}
