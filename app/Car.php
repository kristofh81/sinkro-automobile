<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model {

	protected $table = 'cars';
	public $timestamps = true;
	protected $fillable = array('potency', 'mileage', 'doors', 'cilinders', 'production_date', 'revision_expiry_date', 'bollino_blu_expiry_date', 'immatriculation', 'total_owners', 'accident_history', 'travel_ability', 'insert_code', 'vin', 'availability_period', 'description', 'price', 'publish_flag', 'reserved_flag', 'images_id');

	public function marks()
	{
		return $this->hasOne('App\Mark', 'marks_id');
	}

	public function carmodels()
	{
		return $this->hasOne('App\Carmodel', 'carmodels_id');
	}

	public function types()
	{
		return $this->hasOne('App\Type', 'types_id');
	}

	public function colors()
	{
		return $this->hasOne('App\Color', 'colors_id');
	}

	public function categories()
	{
		return $this->hasOne('App\Category', 'catogories_id');
	}

	public function versions()
	{
		return $this->hasOne('App\Version', 'versions_id');
	}

	public function fuel_types()
	{
		return $this->hasOne('App\Fueltype', 'fuel_types_id');
	}

	public function consumptionemissions()
	{
		return $this->hasOne('App\Consumptionemission', 'consumptionemissions_id');
	}

	public function characteristics()
	{
		return $this->hasOne('App\Characteristic', 'characteristics_id');
	}

	public function images()
	{
		return $this->hasOne('App\Image', 'images_id');
	}

}