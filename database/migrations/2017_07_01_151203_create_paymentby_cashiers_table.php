<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatepaymentbyCashiersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paymentby_cashiers', function(Blueprint $table) {
            $table->increments('id');
            $table->date('month');
            $table->string('branch_name');
            $table->string('division_name');
            $table->string('emp_name');
            $table->integer('payment');
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
		Schema::drop('paymentby_cashiers');
	}

}
