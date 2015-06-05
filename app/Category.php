<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'categories';
	public $timestamps = true;
	protected $fillable = array('name');

	public function cars()
	{
		return $this->belongsTo('App\Car');
	}

}