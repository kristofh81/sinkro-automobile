<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsumptionemissionsTable extends Migration {

	public function up()
	{
		Schema::create('consumptionemissions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('specifications')->nullable();
			$table->string('consumption_urban')->nullable();
			$table->string('consumption_suburban')->nullable();
			$table->string('consumption_general')->nullable();
			$table->string('emission_co2')->nullable();
			$table->string('class_energy_efficiency', 12)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('consumptionemissions');
	}
}