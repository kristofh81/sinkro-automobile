<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model {

	protected $table = 'marks';
	public $timestamps = true;
	protected $fillable = array('name','models_id');

	public function cars()
	{
		return $this->belongsTo('App\Car');
	}

	public function models()
	{
		return $this->hasOne('App\Model', 'models_id');
	}

}