<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model {

	protected $table = 'characteristics';
	public $timestamps = true;
	protected $fillable = array('airco','servo', 'park_sensors', 'seats_number', 'internal_design', 'internal_color', 'bluetooth', 'cd_player', 'electrically_adjustable_seats', 'display_headup', 'multifunction_assistent', 'panoramic_view', 'ski_bag', 'auxiliary_heating', 'radio_system', 'on_board_computer', 'electric_windows', 'handsfree_kit', 'interface_mp3', 'navigation', 'convertible_roof', 'seat_heating', 'sporttype_seats', 'sport_package','cruise_control', 'central_door_lock', 'tow_bar', 'alloy_wheels', 'roof_rack', 'sport_suspension', 'electronic_side_windows', 'class_emission', 'airbag', 'abs', 'immobilizer', 'isofix', 'fog_lights', 'rain_sensor', 'daytime_running_lights', 'xenon_lights', 'traction_integral', 'esp', 'adaptive_lights', 'light_sensor', 'filter_antiparticles', 'start_stop_system', 'traction_control', 'access_handicapped', 'taxi', 'guarantee', 'service_booklet', 'non_smoking');
	public $placeholder;

	public function cars()
	{
		return $this->belongsTo('App\Car');
	}

	/**
	* static setColumns for cars.update
	* params $array, $object
	* return updates the object
	*/
	public static function setColumns($input_array, $object_type)
	{
		foreach ($input_array as $key => $value) {
      		$object_type->$key = $value;
    	}
    	$object_type->update();
	}

	/**
	*  translateVar for cars.show
	*
	*/
	public function translateVar($string)
	{
		$chars_transl_array = array('airco' => 'Climatizzatore', 
		'servo' => 'Servosterzo', 
		'park_sensors' => 'Sensori parcheggio', 
		'seats_number' => 'Numeri posti', 
		'internal_design' => 'Design interni', 
		'internal_color' => 'Colore interni', 
		'bluetooth' => 'Bluetooth', 
		'cd_player' => 'Lettore CD', 
		'electrically_adjustable_seats' => 'Regolazione elettrica del sedile', 
		'display_headup' => 'Display head-up', 
		'multifunction_assistent' => 'Volante multifunzione', 
		'panoramic_view' => 'Tettuccio panoramico in vetro', 
		'ski_bag' => 'Sacca per sci', 
		'auxiliary_heating' => 'Riscaldamento ausiliario', 
		'radio_system' => 'Sintonizzatorre/Radio', 
		'on_board_computer' => 'Computer di bordo', 
		'electric_windows' => 'Alzacristalli elettrico', 
		'handsfree_kit' => 'Kit vivavoce', 
		'interface_mp3' => 'Interfaccia mp3', 
		'navigation' => 'Navigazione satellitare', 
		'convertible_roof' => 'Tettuccio apribile', 
		'seat_heating' => 'Sedili riscaldati', 
		'sporttype_seats' => 'edili sportivi', 
		'cruise_control' => 'Cruise Control', 
		'central_door_lock' => 'Chiusira centralizzata', 
		'tow_bar' => 'Gancio traino', 
		'alloy_wheels' => 'Cerchi in lega', 
		'roof_rack' => 'Portabagagli a tetto', 
		'sport_suspension' => 'Sospensione sportiva', 
		'electronic_side_windows' => 'Speccchietto laterale elettrico', 
		'class_emission' => 'Classa emissioni', 
		'airbag' => 'Airbag', 
		'abs' => 'ABS', 
		'immobilizer' => 'Antifurto immobilizer', 
		'isofix' => 'Isofix', 
		'fog_lights' => 'Fendinebbia', 
		'rain_sensor' => 'Sensore di pioggia', 
		'daytime_running_lights' => 'Luci diurne', 
		'xenon_lights' => 'Fari xenon', 
		'traction_integral' => 'Trazione integral', 
		'esp' => 'ESP', 
		'adaptive_lights' => 'Illuminazione adattativa', 
		'light_sensor' => 'Sensore di luce', 
		'filter_antiparticles' => 'Filtro antiparticolato', 
		'start_stop_system' => 'Sistema start & stop', 
		'traction_control' => 'Controlle trazione', 
		'access_handicapped' => 'Accesso disabili', 
		'taxi' => 'Taxi',
		'guarantee' => 'Garanzia', 
		'service_booklet' => 'Libretto manutenzioni', 
		'non_smoking' => 'Veicolo per non fumatori',
		'sport_package' => 'Pachetto sport');

		foreach ($chars_transl_array as $key => $value) {
			if ($key == $string) {
				return $value;
			}
		}
	}
}