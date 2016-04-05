<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Http\Requests\ImageRequest;

use App\Nation;
use App\Car;
use App\Mark;
use App\Carmodel;
use App\Consumptionemission;
use App\Color;
use App\Characteristic;
use App\Image;
use Input; 

class CarController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $cars = Car::where('publish_flag','1')->get();
    
    if (!$cars->isEmpty()) {
      
      foreach ($cars as $key => $car) {
        $images[] = Image::where('car_id', '=', $car->id)->first();
          //check if first image exists
          if ($images[$key] !== null ){
            true;
          } else {
            $images[$key]['location'] = "img/imagenotavailable.jpg";
          }

        $marks[] = $car->marks->first();
       
        $carmodels[] = Carmodel::where('id' ,$car->models_id)->first();
       
      //$cm_id = \DB::table('car_mark')->where('car_id', $car->id)->first()->mark_id;
    
    //Mark::where('car_id', '=', $car->id)->first();
      }

     // dd( $carmodels);
        
      return view('cars.index')->with( ['cars' => $cars,  'images' => $images, 'marks' => $marks , 'carmodels'=>$carmodels ] );
    
    // the first car to be created
    } else {
      $nations = Nation::lists('name');
      array_unshift($nations , 'Seleziona');
      $marks = Mark::lists('name');
      array_unshift($marks , 'Seleziona');
     session()->flash('flash_first_insert', 'Crea il primo veicolo nel database!');
    return view('cars.create')->with(['nations' => $nations, 'marks' => $marks]);
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //get values of nations and marks tables via pivots
    $nations = Nation::lists('name');
    array_unshift($nations , 'Seleziona');
    $marks = Mark::lists('name');
    array_unshift($marks , 'Seleziona');
   
    return view('cars.create')->with(['nations' => $nations, 'marks' => $marks]);
  }

  /**
   * Store a newly created resource in storage.
   * CarRequest Request for validation rules and input retrieval
   *
   * @return Response
   */
  public function store(CarRequest $request)
  {
  	//receive various input fields
    $input_colors = $request->only('color_type', 'manufacturer', 'metallic');
    $input_consumptionemission = $request->only('specifications', 'consumption_urban', 'consumption_suburban', 'consumption_general', 'emission_co2', 'class_energy_efficiency');
    $input_characteristics = $request->only('airco','park_sensors','seats_number','internal_design','internal_color','bluetooth','cd_player','electrically_adjustable_seats','display_headup','multifunction_assistent','panoramic_view','ski_bag','auxiliary_heating','radio_system','on_board_computer','electric_windows','handsfree_kit','interface_mp3','navigation','convertible_roof','seat_heating','sporttype_seats','cruise_control','central_door_lock',
	'tow_bar','alloy_wheels','roof_rack','sport_suspension','electronic_side_windows','sport_package','class_emission','airbag','abs','immobilizer','isofix','fog_lights','rain_sensor','daytime_running_lights','xenon_lights','traction_integral','esp','adaptive_lights','light_sensor','filter_antiparticles','start_stop_system','servo','traction_control','access_handicapped','taxi','guarantee','service_booklet','non_smoking'
    	);
    $input_car = $request->only('category', 'type', 'potency', 'mileage', 'doors','gears', 'cilinders', 'revision_expiry_date', 'bollino_blu_expiry_date','immatriculation_date_month','immatriculation_date_year', 'total_owners', 'accident_history', 'travel_ability', 'insert_code', 'vin', 'availability_period', 'description', 'price', 'price_b2b' , 'publish_flag', 'reserved_flag', 'fuel_type', 'models_id');

    //get the value marks and nations of request -> prepare for attach in Imagecontroller
	  $input_marks_id = head($request->only('marks_id'));
	  $input_nations_id = head($request->only('nations_id'));
    
    //convert immatriculation_date into date form and push in array input_car
    $new_immatriculation_date = head($request->only('immatriculation_date_year')) .'-'. head($request->only('immatriculation_date_month')) .'-00';
    $input_car['immatriculation_date'] = $new_immatriculation_date;

    //convert dates in correct date formats and put back in array inut_car
    $input_car['revision_expiry_date'] = Car::dbDateFormat($input_car['revision_expiry_date']);
    $input_car['bollino_blu_expiry_date'] = Car::dbDateFormat($input_car['bollino_blu_expiry_date']);
    $input_car['availability_period'] = Car::dbDateFormat($input_car['availability_period']);
    
    //put all input into the session
    session([
    	'input_colors' => $input_colors, 
    	'input_consumptionemission'=> $input_consumptionemission, 
    	'input_characteristics' =>$input_characteristics,
    	'input_car' =>$input_car,
    	'input_marks_id' =>$input_marks_id,
    	'input_nations_id' =>$input_nations_id,
    	]);

    return redirect()->route('cars.images.create');

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
    $image = Image::where('car_id', $id)->first();
    $characteristic = Characteristic::findOrFail($car->characteristics_id);
    $color = Color::findOrFail($car->colors_id);
    $consumptionemission = Consumptionemission::findOrFail($car->consumptionemissions_id);
    $carmodel = Carmodel::findOrFail($car->models_id);

      //check if first image exists
      if ($image !== null ){
        $image_location = $image->location;
      } else {
        $image_location = "img/imagenotavailable.jpg";
      }

    return view('cars.show')->with( [
      'car' => $car, 
      'image_location' => $image_location, 
      'characteristic' => $characteristic,
      'color' => $color,
      'consumptionemission' => $consumptionemission,
      'carmodel' => $carmodel,
      ] );
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    //find car and its images
    $car = Car::findOrFail($id);

    $images = $car->images;

    //data other tables
    $characteristic = Characteristic::findOrFail($car->characteristics_id);
    $color = Color::findOrFail($car->colors_id);
    $consumptionemission = Consumptionemission::findOrFail($car->consumptionemissions_id);
    $carmodel = Carmodel::findOrFail($car->models_id);

    //convert the dates to the edit form
    $car->immatriculation_date = Car::frontDateFormat($car->immatriculation_date);
    $car->revision_expiry_date = Car::frontDateFormat($car->revision_expiry_date);
    $car->bollino_blu_expiry_date = Car::frontDateFormat($car->bollino_blu_expiry_date);

    //find pivot vars
    $nations = Nation::lists('name');
    array_unshift($nations , 'Seleziona');
    $marks = Mark::lists('name');
    array_unshift($marks , 'Seleziona');

    return view('cars.edit')->with( [
      'car' => $car, 
      'images' => $images, 
      'nations' => $nations, 
      'marks' => $marks,
      'characteristics' => $characteristic,
      'color' => $color,
      'consumptionemission' => $consumptionemission,
      'carmodel' => $carmodel,
      ] );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id of car, CarRequest for validation
   * @return Response
   */
  public function update($id, CarRequest $request)
  {
    
    //receive various input fields
    $input_colors = $request->only('color_type', 'manufacturer', 'metallic');
    $input_consumptionemission = $request->only('specifications', 'consumption_urban', 'consumption_suburban', 'consumption_general', 'emission_co2', 'class_energy_efficiency');
    $input_characteristics = $request->only('airco','park_sensors','seats_number','internal_design','internal_color','bluetooth','cd_player','electrically_adjustable_seats','display_headup','multifunction_assistent','panoramic_view','ski_bag','auxiliary_heating','radio_system','on_board_computer','electric_windows','handsfree_kit','interface_mp3','navigation','convertible_roof','seat_heating','sporttype_seats','cruise_control','central_door_lock',
  'tow_bar','alloy_wheels','roof_rack','sport_suspension','electronic_side_windows','sport_package','class_emission','airbag','abs','immobilizer','isofix','fog_lights','rain_sensor','daytime_running_lights','xenon_lights','traction_integral','esp','adaptive_lights','light_sensor','filter_antiparticles','start_stop_system','servo','traction_control','access_handicapped','taxi','guarantee','service_booklet','non_smoking'
      );
    $input_car = $request->only('category', 'type', 'potency', 'mileage', 'doors','gears', 'cilinders', 'revision_expiry_date', 'bollino_blu_expiry_date','immatriculation_date_month','immatriculation_date_year', 'total_owners', 'accident_history', 'travel_ability', 'insert_code', 'vin', 'availability_period', 'description', 'price', 'price_b2b' , 'publish_flag', 'reserved_flag', 'fuel_type');

    //convert immatriculation_date into date form and push in array input_car
    $new_immatriculation_date = head($request->only('immatriculation_date_year')) .'-'. head($request->only('immatriculation_date_month')) .'-00';
    $input_car['immatriculation_date'] = $new_immatriculation_date;
    unset($input_car['immatriculation_date_year']);unset($input_car['immatriculation_date_month']);
    //convert dates in correct date formats and put back in array inut_car
    $input_car['revision_expiry_date'] = Car::dbDateFormat($input_car['revision_expiry_date']);
    $input_car['bollino_blu_expiry_date'] = Car::dbDateFormat($input_car['bollino_blu_expiry_date']);
    $input_car['availability_period'] = Car::dbDateFormat($input_car['availability_period']);

    //find and update car attributes
    $car = Car::findOrFail($id); 
    Car::setColumns($input_car, $car);
    
    //update other tables
    $characteristic = Characteristic::findOrFail($car->characteristics_id);
    Characteristic::setColumns($input_characteristics, $characteristic);

    $color = Color::findOrFail($car->colors_id);
    Color::setColumns($input_colors, $color);

    $consumptionemission = Consumptionemission::findOrFail($car->consumptionemissions_id); 
    Consumptionemission::setColumns($input_consumptionemission, $consumptionemission);
    
    //  pivot tables
    $car->marks()->sync($request->only('marks_id'));
    $car->nations()->sync($request->only('nations_id'));
   
    session()->flash('flash_updated_item', 'Il veicolo e stato aggiornato');
    return redirect()->to(route('cars.index'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //delete car table
    $car = Car::findOrFail($id);
    $car->delete();

    //delete other tables
    $characteristic = Characteristic::findOrFail($car->characteristics_id);
    $characteristic->delete();
    $color = Color::findOrFail($car->colors_id);
    $color->delete();
    $consumptionemission = Consumptionemission::findOrFail($car->consumptionemissions_id); 
    $consumptionemission->delete();

    session()->flash('flash_deleted_item', 'Il veicolo e stato eliminato');
    return redirect()->to(route('cars.index'));
  }

  /**
   * Complete creation of new resource 2nd view
   *
   * @param  int  $car_id
   * @return Response
   */  
  public function completion($car_id)
  {

  	$car = Car::findOrFail($car_id);
    $image = Image::where('car_id', $car_id)->first();

    //check if first image exists
      if ($image !== null ){
        $image_location = $image->location;
      } else {
        $image_location = "img/imagenotavailable.jpg";
      }
    return view('cars.completion')->with( ['car' => $car, 'image_location' => $image_location] );
  }

  /**
   * index of unpublished and reserved cars
   *
   * @param  int  $car_id
   * @return Response
   */  
  public function reserved()
  {
    return "hello";
  /*
    $arrayCars = array();
    $cars_unpublished = Car::where('publish_flag','0')->get();
    $arrayCars[] = $cars_unpublished;
    $cars_reserved = Car::where('reserved_flag','1')->get();
    $arrayCars[] = $cars_reserved;

    foreach ($arrayCars[] as $cars) {
      
      if (!$cars->isEmpty()) {
        
        foreach ($cars as $key => $car) {
          $images[] = Image::where('car_id', '=', $car->id)->first();
            //check if first image exists
            if ($images[$key] !== null ){
              true;
            } else {
              $images[$key]['location'] = "img/imagenotavailable.jpg";
            } 
          $marks[] = $car->marks->first();
        }
      }
    }
    return view('cars.index')->with( ['cars' => $cars,  'images' => $images, 'marks' => $marks] );
    */
  }

  public function ajaxCreate()
  {
   
  $mark_id = Input::get('mark_id');
  $carmodel = Carmodel::where('marks_id', $mark_id)->get();
  return \Response::json($carmodel);

  }

}

?>