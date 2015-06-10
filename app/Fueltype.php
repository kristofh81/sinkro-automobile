<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Fueltype extends Model {

	protected $table = 'fuel_types';
	public $timestamps = true;

	public function cars()
	{
		return $this->belongsTo('App\Car');
	}

}