<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model {

	protected $table = 'versions';
	public $timestamps = true;
	protected $fillable = array('name');

	public function cars()
	{
		return $this->belongsTo('App\Car');
	}

}