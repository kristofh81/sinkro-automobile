<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

	protected $table = 'images';
	public $timestamps = true;
	protected $fillable = array('location', 'car_id', 'is_main');

	public function cars()
	{
		return $this->belongsTo('App\Car');
	}

}