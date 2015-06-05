<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model extends Model {

	protected $table = 'models';
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