<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumptionemission extends Model {

	protected $table = 'consumptionemissions';
	public $timestamps = true;
	protected $fillable = array('specifications', 'consumption_urban', 'consumption_suburban', 'consumption_general', 'emission_co2');

	public function cars()
	{
		return $this->belongsTo('App\Car');
	}

}