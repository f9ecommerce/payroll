<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesalaryPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('salary_payments', function(Blueprint $table) {
            $table->increments('id');
            $table->date('month');
            $table->string('branch_name');
            $table->string('division_name');
            $table->string('emp_name');
            $table->integer('salary');
            $table->integer('increment');
            $table->integer('abscent');
            $table->integer('adjusted_abscent');
            $table->integer('ot_amount');
            $table->integer('adj_otdays');
            $table->integer('basic');
            $table->integer('bonous');
            $table->integer('salary_advance');
            $table->integer('hra');
            $table->integer('allowance');
            $table->integer('other_allowance');
            $table->text('description');
            $table->integer('sal_to_be_paid');
            $table->integer('payment');
            $table->integer('od_open_amount');
            $table->integer('od_close_amount');
            $table->integer('pay_salary');
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
		Schema::drop('salary_payments');
	}

}
