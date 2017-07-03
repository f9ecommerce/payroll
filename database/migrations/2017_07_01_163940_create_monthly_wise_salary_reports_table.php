<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatemonthlyWiseSalaryReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('monthly_wise_salary_reports', function(Blueprint $table) {
            $table->increments('id');
            $table->string('branch_name');
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
		Schema::drop('monthly_wise_salary_reports');
	}

}
