<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumptionemission extends Model {

	protected $table = 'consumptionemissions';
	public $timestamps = true;
	protected $fillable = array('specifications', 'consumption_urban', 'consumption_suburban', 'consumption_general', 'emission_co2', 'class_energy_efficiency');

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
}