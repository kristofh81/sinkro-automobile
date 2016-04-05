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

			'category' 				=> 'alpha',
			'mileage' 				=> 'required|numeric',
			'cilinders' 			=> 'numeric',
			'revision_expiry_date' 	=> 'date_format:d/m/Y',
			'bollino_blu_expiry_date' => 'date_format:d/m/Y',
			'accident_history' 		=> 'required|alpha',
			'travel_ability' 		=> 'boolean',
			'availability_period' 	=> 'date_format:d/m/Y',
			'price' 				=> 'required|numeric',
			'price_b2b' 			=> 'numeric',
			'publish_flag'			=> 'boolean',
			'reserved_flag' 		=> 'boolean',
			'marks_id' 				=> 'required|numeric|min:1',
			'nations_id' 			=> 'required|numeric|min:1',
			'consumption_urban' 	=> 'numeric',
			'consumption_suburban' 	=> 'numeric',
			'consumption_general' 	=> 'numeric',
			'emission_co2' 			=> 'numeric',
			'class_energy_efficiency' => 'numeric',
			'color_type' 			=> '',
			'immatriculation_date_month'	=> 'required|numeric',
			'immatriculation_date_year'	=> 'required|numeric',

			];
	}

}
