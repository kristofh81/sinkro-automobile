<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model {

	protected $table = 'marks';
	public $timestamps = true;
	protected $fillable = array('name');

	public function cars()
	{
		return $this->belongsToMany('App\Car');
	}

	public function carmodels()
	{
		return $this->hasOne('App\Model');
	}

}