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

}