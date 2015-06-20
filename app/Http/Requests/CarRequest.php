<?php 
namespace App\Http\Requests;

use App\Http\Requests\Request;

class CarRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
		/*
			'category' 				=> 'numeric|min:1',
			'type' 					=> '',
			'potency' 				=> '',
			'mileage' 				=> 'required|numeric',
			'doors' 				=> '',
			'fuel_type' 			=> 'required|numeric|digits_between:1,11',
			'cilinders' 			=> 'numeric',
			'revision_expiry_date' 	=> 'date',
			'bollino_blu_expiry_date' => 'date',
			'total_owners' 			=> '',
			'accident_history' 		=> 'numeric|min:1',
			'travel_ability' 		=> 'boolean',
			'insert_code' 			=> '',
			'vin' 					=> '',
			'availability_period' 	=> 'date',
			'description' 			=> 'required',
			'price' 				=> 'required|numeric',
			'price_b2b' 			=> 'numeric',
			'publish_flag'			=> 'boolean',
			'reserved_flag' 		=> 'boolean',
			'marks_id' 				=> 'required|numeric|min:1',
			'models_id' 			=> '',
			'types_id' 				=> '',
			'versions_id' 			=> '',
			'colors_id' 			=> '',
			'nations' 				=> 'required|numeric',

			'consumptionemissions_id' => '',
			'characteristics_id' 	=> '',
			'immatriculation_date_month'	=> 'required|numeric',
			'immatriculation_date_year'	=> 'required|numeric',
			*/
			];
	}

}
