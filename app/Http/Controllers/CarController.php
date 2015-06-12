<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;

use App\Nation;
use App\Consumptionemission;
use App\Color;
use App\Characteristic;


class CarController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $cars = Nation::all();
    
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

    #$input_colors = $request->only('color_type', 'manufacturer', 'metallic');
    #Color::create($input_colors);

    #$input_consumptionemission = $request->only('specifications', 'consumption_urban', 'consumption_suburban', 'consumption_general', 'emission_co2', 'class_energy_efficiency');
    #Consumptionemission::create($input_consumptionemission);

    #$input_characteristics = $request->all();
    #Characteristic::create($input_characteristics);
    $input = $request->specifications;
    dd($input);

/*
    $input_car = $request->only('category, 'potency', 'mileage', 'doors', 'cilinders', 'immatriculation_date', 'revision_expiry_date', 'bollino_blu_expiry_date', 'total_owners', 'accident_history', 'travel_ability', 'insert_code', 'vin', 'availability_period', 'description', 'price', 'priceb2b' , 'publish_flag', 'reserved_flag', 'images_id', 'marks_id', 'nations_id', 'fuel_type');
   
       Car::create([
       'marks_id' => $request->name_marks,
       'marks_id' => $request->name_marks,
       'marks_id' => $request->name_marks,
       'marks_id' => $request->name_marks,
       'marks_id' => $request->name_marks,
       'marks_id' => $request->name_marks,
       'marks_id' => $request->name_marks,
       'marks_id' => $request->name_marks,
       'marks_id' => $request->name_marks,
       'marks_id' => $request->name_marks,
       'marks_id' => $request->name_marks,
       'marks_id' => $request->name_marks,
      ]);
*/
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $cars = Nation::findOrFail($id);
    return view('cars.show')->with( 'cars', $cars);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
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
    
  }
  
}

?>