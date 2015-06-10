<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {

	protected $table = 'types';
	public $timestamps = true;

	public function cars()
	{
		return $this->belongsTo('App\Car');
	}

}