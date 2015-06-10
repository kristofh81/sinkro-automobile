<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Carmodel extends Model {

	protected $table = 'carmodels';
	public $timestamps = true;

	public function cars()
	{
		return $this->belongsTo('App\Car');
	}

	public function marks()
	{
		return $this->belongsTo('App\Mark');
	}

}