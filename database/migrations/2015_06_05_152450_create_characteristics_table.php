<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacteristicsTable extends Migration {

	public function up()
	{
		Schema::create('characteristics', function(Blueprint $table) {
			$table->increments('id');
			$table->string('airco')->nullable();
			$table->string('park_sensors')->nullable();
			$table->integer('seats_number')->nullable();
			$table->string('internal_design')->nullable();
			$table->string('internal_color')->nullable();
			$table->boolean('bluetooth')->default(0)->nullable();
			$table->boolean('cd_player')->default(0)->nullable();
			$table->boolean('electrically_adjustable_seats')->default(0)->nullable();
			$table->boolean('display_headup')->default(0)->nullable();
			$table->boolean('multifunction_assistent')->default(0)->nullable();
			$table->boolean('panoramic_view')->default(0)->nullable();
			$table->boolean('ski_bag')->default(0)->nullable();
			$table->boolean('auxiliary_heating')->default(0)->nullable();
			$table->boolean('radio_system')->default(0)->nullable();
			$table->boolean('on_board_computer')->default(0)->nullable();
			$table->boolean('electric_windows')->default(0)->nullable();
			$table->boolean('handsfree_kit')->default(0)->nullable();
			$table->boolean('interface_mp3')->default(0)->nullable();
			$table->boolean('navigation')->default(0)->nullable();
			$table->boolean('convertible_roof')->default(0)->nullable();
			$table->boolean('seat_heating')->default(0)->nullable();
			$table->boolean('sporttype_seats')->default(0)->nullable();
			$table->boolean('cruise_control')->default(0)->nullable();
			$table->boolean('central_door_lock')->default(0)->nullable();
			$table->boolean('tow_bar')->default(0)->nullable();
			$table->boolean('alloy_wheels')->default(0)->nullable();
			$table->boolean('roof_rack')->default(0)->nullable();
			$table->boolean('sport_suspension')->default(0)->nullable();
			$table->boolean('electronic_side_windows')->default(0)->nullable();
			$table->boolean('sport_package')->default(0)->nullable();
			$table->boolean('servo')->default(0)->nullable();
			$table->string('class_emission')->nullable();
			$table->string('airbag')->nullable();
			$table->boolean('abs')->default(0)->nullable();
			$table->boolean('immobilizer')->default(0)->nullable();
			$table->boolean('isofix')->default(0)->nullable();
			$table->boolean('fog_lights')->default(0)->nullable();
			$table->boolean('rain_sensor')->default(0)->nullable();
			$table->boolean('daytime_running_lights')->default(0)->nullable();
			$table->boolean('xenon_lights')->default(0)->nullable();
			$table->boolean('traction_integral')->default(0)->nullable();
			$table->boolean('esp')->default(0)->nullable();
			$table->boolean('adaptive_lights')->default(0)->nullable();
			$table->boolean('light_sensor')->default(0)->nullable();
			$table->boolean('filter_antiparticles')->default(0)->nullable();
			$table->boolean('start_stop_system')->default(0)->nullable();
			$table->boolean('traction_control')->default(0)->nullable();
			$table->boolean('access_handicapped')->default(0)->nullable();
			$table->boolean('taxi')->default(0)->nullable();
			$table->boolean('guarantee')->default(0)->nullable();
			$table->boolean('service_booklet')->default(0)->nullable();
			$table->boolean('non_smoking')->default(0)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('characteristics');
	}
}