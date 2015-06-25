<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model {

	protected $table = 'colors';
	public $timestamps = true;
	protected $fillable = array('color_type', 'manufacturer', 'metallic');

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