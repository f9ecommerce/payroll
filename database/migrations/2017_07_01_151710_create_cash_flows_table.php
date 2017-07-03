<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatecashFlowsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cash_flows', function(Blueprint $table) {
            $table->increments('id');
            $table->date('month');
            $table->string('branch_name');
            $table->string('type');
            $table->string('cashier');
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
		Schema::drop('cash_flows');
	}

}
