<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateemployeeWiseReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee_wise_reports', function(Blueprint $table) {
            $table->increments('id');
            $table->string('branch');
            $table->string('division_name');
            $table->string('emp_name');
            $table->date('from_date');
            $table->date('to_date');
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
		Schema::drop('employee_wise_reports');
	}

}
