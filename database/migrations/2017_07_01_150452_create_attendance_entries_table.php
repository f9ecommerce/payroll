<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateattendanceEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendance_entries', function(Blueprint $table) {
            $table->increments('id');
            $table->date('attendance_month');
            $table->string('branch_name');
            $table->string('division_name');
            $table->string('emp_name');
            $table->integer('working_days');
            $table->integer('absecent_days');
            $table->integer('ot_days');
            $table->integer('advance');
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
		Schema::drop('attendance_entries');
	}

}
