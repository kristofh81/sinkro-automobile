<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('cars', function(Blueprint $table) {
			$table->foreign('marks_id')->references('id')->on('marks')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->foreign('carmodels_id')->references('id')->on('carmodels')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->foreign('types_id')->references('id')->on('types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->foreign('versions_id')->references('id')->on('versions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->foreign('colors_id')->references('id')->on('colors')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->foreign('categories_id')->references('id')->on('categories')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->foreign('nations_id')->references('id')->on('nations')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->foreign('fuel_types_id')->references('id')->on('fuel_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->foreign('consumptionemissions_id')->references('id')->on('consumptionemissions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->foreign('characteristics_id')->references('id')->on('characteristics')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->foreign('images_id')->references('id')->on('images')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('marks', function(Blueprint $table) {
			$table->foreign('model_id')->references('id')->on('models')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('cars', function(Blueprint $table) {
			$table->dropForeign('cars_mark_id_foreign');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->dropForeign('cars_models_id_foreign');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->dropForeign('cars_types_id_foreign');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->dropForeign('cars_versions_id_foreign');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->dropForeign('cars_colors_id_foreign');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->dropForeign('cars_categories_id_foreign');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->dropForeign('cars_nations_id_foreign');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->dropForeign('cars_fuel_types_id_foreign');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->dropForeign('cars_consumptionemissions_id_foreign');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->dropForeign('cars_characteristics_id_foreign');
		});
		Schema::table('cars', function(Blueprint $table) {
			$table->dropForeign('cars_images_id_foreign');
		});
		Schema::table('marks', function(Blueprint $table) {
			$table->dropForeign('marks_model_id_foreign');
		});
	}
}