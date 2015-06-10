<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarsTable extends Migration {

	public function up()
	{
		Schema::create('cars', function(Blueprint $table) {
			$table->increments('id');
			$table->string('type', 32)->index();
			$table->integer('potency')->nullable();
			$table->integer('mileage');
			$table->date('inscription_date');
			$table->string('doors')->nullable();
			$table->string('cilinders', 32)->nullable();
			$table->date('production_date')->nullable();
			$table->date('revision_expiry_date')->nullable();
			$table->date('bollino_blu_expiry_date')->nullable();
			$table->date('immatriculation')->nullable();
			$table->string('total_owners')->nullable();
			$table->boolean('accident_history')->nullable();
			$table->boolean('travel_ability')->nullable();
			$table->string('insert_code')->nullable();
			$table->string('vin', 32)->nullable();
			$table->date('availability_period')->nullable();
			$table->text('description');
			$table->integer('price')->index();
			$table->integer('price_b2b')->nullable();
			$table->integer('marks_id')->unsigned();
			$table->integer('models_id')->unsigned();
			$table->integer('types_id')->unsigned();
			$table->integer('versions_id')->unsigned();
			$table->integer('colors_id')->unsigned();
			$table->integer('categories_id')->unsigned();
			$table->integer('nations_id')->unsigned();
			$table->integer('fuel_types_id')->unsigned();
			$table->integer('consumptionemissions_id')->unsigned();
			$table->integer('characteristics_id')->unsigned();
			$table->timestamps();
			$table->boolean('publish_flag')->default(0);
			$table->boolean('reserved_flag')->default(0);
			$table->integer('images_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('cars');
	}
}