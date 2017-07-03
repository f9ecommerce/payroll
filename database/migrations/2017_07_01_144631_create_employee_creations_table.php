<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateemployeeCreationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee_creations', function(Blueprint $table) {
            $table->increments('id');
            $table->string('emp_name');
            $table->string('sur_name');
            $table->string('father_name');
            $table->integer('Mobile');
            $table->date('dob');
            $table->string('qualification');
            $table->date('doj');
            $table->integer('salary');
            $table->string('status');
            $table->string('branch');
            $table->string('division');
            $table->string('designation');
            $table->text('description');
            $table->text('address');
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
		Schema::drop('employee_creations');
	}

}
