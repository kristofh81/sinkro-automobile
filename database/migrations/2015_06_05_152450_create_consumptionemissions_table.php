<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsumptionemissionsTable extends Migration {

	public function up()
	{
		Schema::create('consumptionemissions', function(Blueprint $table) {
			$table->increments('id');
			$table->string('specifications')->nullable();
			$table->integer('consumption_urban')->nullable();
			$table->integer('consumption_suburban')->nullable();
			$table->integer('consumption_general')->nullable();
			$table->integer('emission_co2')->nullable();
			$table->string('class_energy_efficiency', 12)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('consumptionemissions');
	}
}