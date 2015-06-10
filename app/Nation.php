<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Nation extends Model {

	protected $table = 'nations';
	public $timestamps = true;

	public function cars()
	{
		return $this->belongsTo('App\Car');
	}

}