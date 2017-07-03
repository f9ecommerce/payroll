<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesetSalaryReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('set_salary_reports', function(Blueprint $table) {
            $table->increments('id');
            $table->string('branch');
            $table->string('division_name');
            $table->string('emp_name');
            $table->date('salary_month');
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
		Schema::drop('set_salary_reports');
	}

}
