<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model {

	protected $table = 'characteristics';
	public $timestamps = true;
	protected $fillable = array('airco', 'park_sensors', 'seats_number', 'internal_design', 'internal_color', 'bluetooth', 'cd_player', 'electrically_adjustable_seats', 'display_headup', 'multifunction_assistent', 'panoramic_view', 'ski_bag', 'auxiliary_heating', 'radio_system', 'on_board_computer', 'electric_windows', 'handsfree_kit', 'interface_mp3', 'navigation', 'convertible_roof', 'seat_heating', 'sporttype_seats', 'cruise_control', 'central_door_lock', 'tow_bar', 'alloy_wheels', 'roof_rack', 'sport_suspension', 'electronic_side_windows', 'class_emission', 'airbag', 'abs', 'immobilizer', 'isofix', 'fog_lights', 'rain_sensor', 'daytime_running_lights', 'xenon_lights', 'traction_integral', 'esp', 'adaptive_lights', 'light_sensor', 'filter_antiparticles', 'start_stop_system', 'traction_control', 'access_handicapped', 'taxi', 'guarantee', 'service_booklet', 'non_smoking');

	public function cars()
	{
		return $this->belongsTo('App\Car');
	}

}