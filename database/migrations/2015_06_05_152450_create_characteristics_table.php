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
			$table->string('internal_color');
			$table->boolean('bluetooth')->default(0);
			$table->boolean('cd_player')->default(0);
			$table->boolean('electrically_adjustable_seats')->default(0);
			$table->boolean('display_headup')->default(0);
			$table->boolean('multifunction_assistent')->default(0);
			$table->boolean('panoramic_view')->default(0);
			$table->boolean('ski_bag')->default(0);
			$table->boolean('auxiliary_heating')->default(0);
			$table->boolean('radio_system')->default(0);
			$table->boolean('on_board_computer')->default(0);
			$table->boolean('electric_windows')->default(0);
			$table->boolean('handsfree_kit')->default(0);
			$table->boolean('interface_mp3')->default(0);
			$table->boolean('navigation')->default(0);
			$table->boolean('convertible_roof')->default(0);
			$table->boolean('seat_heating')->default(0);
			$table->boolean('sporttype_seats')->default(0);
			$table->boolean('cruise_control')->default(0);
			$table->boolean('central_door_lock')->default(0);
			$table->boolean('tow_bar')->default(0);
			$table->boolean('alloy_wheels')->default(0);
			$table->boolean('roof_rack')->default(0);
			$table->boolean('sport_suspension')->default(0);
			$table->boolean('electronic_side_windows')->default(0);
			$table->boolean('sport_package')->default(0);
			$table->string('class_emission')->nullable();
			$table->string('airbag')->nullable();
			$table->boolean('abs')->default(0);
			$table->boolean('immobilizer')->default(0);
			$table->boolean('isofix')->default(0);
			$table->boolean('fog_lights')->default(0);
			$table->string('rain_sensor')->default('0');
			$table->boolean('daytime_running_lights')->default(0);
			$table->boolean('xenon_lights')->default(0);
			$table->boolean('traction_integral')->default(0);
			$table->boolean('esp')->default(0);
			$table->boolean('adaptive_lights')->default(0);
			$table->boolean('light_sensor')->default(0);
			$table->boolean('filter_antiparticles')->default(0);
			$table->boolean('start_stop_system')->default(0);
			$table->integer('traction_control')->default('0');
			$table->boolean('access_handicapped')->default(0);
			$table->boolean('taxi')->default(0);
			$table->boolean('guarantee')->default(0);
			$table->boolean('service_booklet')->default(0);
			$table->boolean('non_smoking')->default(0);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('characteristics');
	}
}