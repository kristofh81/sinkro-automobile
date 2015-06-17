<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Http\Requests\ImageRequest;

use App\Nation;
use App\Car;
use App\Mark;
use App\Consumptionemission;
use App\Color;
use App\Characteristic;
use App\Image;


class CarController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $cars = Car::all();
    
    return view('cars.index')->with( 'cars', $cars);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

    return view('cars.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(CarRequest $request)
  {
  	// $app = app();
  	//$input_colors = $app->make('stdClass');
    $input_colors = $request->only('color_type', 'manufacturer', 'metallic');


    //Color::create($input_colors);

    $input_consumptionemission = $request->only('specifications', 'consumption_urban', 'consumption_suburban', 'consumption_general', 'emission_co2', 'class_energy_efficiency');
    //Consumptionemission::create($input_consumptionemission);

    $input_characteristics = $request->only('airco','park_sensors','seats_number','internal_design','internal_color','bluetooth','cd_player','electrically_adjustable_seats','display_headup','multifunction_assistent','panoramic_view','ski_bag','auxiliary_heating','radio_system','on_board_computer','electric_windows','handsfree_kit','interface_mp3','navigation','convertible_roof','seat_heating','sporttype_seats','cruise_control','central_door_lock',
	'tow_bar','alloy_wheels','roof_rack','sport_suspension','electronic_side_windows','sport_package','class_emission','airbag','abs','immobilizer','isofix','fog_lights','rain_sensor','daytime_running_lights','xenon_lights','traction_integral','esp','adaptive_lights','light_sensor','filter_antiparticles','start_stop_system','servo','traction_control','access_handicapped','taxi','guarantee','service_booklet','non_smoking'
    	);
    //Characteristic::create($input_characteristics);
    
    
    //get the value out of request arrays -> prepare for attach in Imagecontroller
	$input_marks_id = head($request->only('marks_id'));
	$input_nations_id = head($request->only('nations_id'));
    $input_car = $request->only('category', 'type', 'potency', 'mileage', 'doors', 'cilinders', 'immatriculation_date', 'revision_expiry_date', 'bollino_blu_expiry_date', 'total_owners', 'accident_history', 'travel_ability', 'insert_code', 'vin', 'availability_period', 'description', 'price', 'priceb2b' , 'publish_flag', 'reserved_flag', 'images_id', 'fuel_type');

	//dd($input_characteristics);

    //$car = Car::create($input_car);
    

    //$car->marks()->attach($input_marks_id);
    //$car->nations()->attach($input_nations_id);
    

    session([
    	'input_colors' => $input_colors, 
    	'input_consumptionemission'=> $input_consumptionemission, 
    	'input_characteristics' =>$input_characteristics,
    	'input_car' =>$input_car,
    	'input_marks_id' =>$input_marks_id,
    	'input_nations_id' =>$input_nations_id,
    	]);
    return redirect()->route('images.create');

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $car = Car::findOrFail($id);
    $images = $car->images;


    return view('cars.show')->with( ['car' => $car, 'images' => $images] );
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $car = Car::findOrFail($id);
    return view('cars.edit')->with( 'car', $car);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    Carr::destroy($id);
  }
  
}

?>