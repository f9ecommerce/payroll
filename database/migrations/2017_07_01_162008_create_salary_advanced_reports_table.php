<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesalaryAdvancedReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('salary_advanced_reports', function(Blueprint $table) {
            $table->increments('id');
            $table->date('from_date');
            $table->date('to_date');
            $table->string('branch_name');
            $table->string('division_name');
            $table->string('emp_name');
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
		Schema::drop('salary_advanced_reports');
	}

}
