<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Carmodel extends Model {

	protected $table = 'models';
	public $timestamps = true;
	protected $fillable = array('name', 'marks_id');

	public function cars()
	{
		return $this->belongsTo('App\Car');
	}

	public function marks()
	{
		return $this->belongsTo('App\Mark');
	}

}