<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Nation;
use Carbon\Carbon;

class Car extends Model {

	protected $table = 'cars';
	public $timestamps = true;
	protected $fillable = array('category', 'type', 'potency', 'mileage', 'doors', 'gears', 'fuel_type', 'cilinders', 'immatriculation_date', 'revision_expiry_date', 'bollino_blu_expiry_date', 'total_owners', 'accident_history', 'travel_ability', 'insert_code', 'vin', 'availability_period', 'description', 'price', 'publish_flag', 'reserved_flag', 'images_id', 'models_id');

	public function marks()
	{
		return $this->belongsToMany('App\Mark')->withTimestamps();
	}

	public function carmodels()
	{
		return $this->hasOne('App\Carmodel');
	}

	public function colors()
	{
		return $this->hasOne('App\Color');
	}

	public function versions()
	{
		return $this->hasOne('App\Version');
	}
	public function nations()
	{
		return $this->belongsToMany('App\Nation')->withTimestamps();
	}

	public function consumptionemissions()
	{
		return $this->hasOne('App\Consumptionemission');
	}

	public function characteristics()
	{
		return $this->hasOne('App\Characteristic');
	}

	public function images()
	{
		return $this->hasMany('App\Image');
	}

	/**
	* convert into time format ('Y-m-d')
	*
	*/
	public static function dbDateFormat($datefrominput)
	{
		$newDateString = date_create_from_format("d/m/Y", $datefrominput);
		return $newDateString->format("Y-m-d");
	}

	/**
	* convert into time format ('d/m/Y')
	*
	*/
	public static function frontDateFormat($datefromdb)
	{
		$newDateString = date_create_from_format("Y-m-d", $datefromdb);
		return $newDateString->format("d/m/Y");
	}

	/**
	* scope published cars in cars.index
	*
	*/
	public function scopePublished($query)
	{
		$query->where('publish_flag', '=', '1');
	}

	/**
	* scope for cars.formpartials.nations for the edit form
	*
	*/
	public function nationsList($id)
	{
		return \DB::table('car_nation')->where('car_id', $id)->first()->nation_id;
	}

	/**
	* scope for cars.formpartials.nations for the edit form
	*
	*/
	public function marksList($id)
	{
		return \DB::table('car_mark')->where('car_id', $id)->first()->mark_id;
	}

	/**
	* static setColumns for cars.update
	*
	*/
	public static function setColumns($input_array, $object_type)
	{
		foreach ($input_array as $key => $value) {
      		$object_type->$key = $value;
    	}
    	$object_type->update();
	}

	/**
	* set diff date for cars.show
	*
	*/
	public function getCreatedAt($date)
	{
		$carbondate = Carbon::parse($date);
		return $carbondate->diffInDays();
	}
}