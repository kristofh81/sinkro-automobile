<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ImageRequest;
use App\Http\Requests\CarRequest;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use App\Nation;
use App\Car;
use App\Mark;
use App\Consumptionemission;
use App\Color;
use App\Characteristic;
use App\Image;

use Input;
use Validator;
use Redirect;
use Session;


class ImageController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return view('images');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
    return view('images.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    //check all session variables
    if ($request->session()->has('input_characteristics') && 
      $request->session()->has('input_consumptionemission') &&
      $request->session()->has('input_colors') &&     
      $request->session()->has('input_marks_id') &&
      $request->session()->has('input_nations_id') &&
      $request->session()->has('input_car')) 
    { 
    //put session values into variables     
      $input_characteristics = session('input_characteristics');
      $input_consumptionemission = session('input_consumptionemission');
      $input_colors = session('input_colors');
      $input_car = session('input_car');
      $input_marks_id = session('input_marks_id');
      $input_nations_id = session('input_nations_id');
    } else { return "some input of page 1 has not been set"; }
    
    Session::flush();
    dd($input_car);
    $color = Color::create($input_colors);
    $cons = Consumptionemission::create($input_consumptionemission);
    $char = Characteristic::create($input_characteristics);

    
    //first create a car object and write to DB
    $car = Car::create($input_car);

    //attach id on pivot tables
    $car->marks()->attach($input_marks_id);
    $car->nations()->attach($input_nations_id);

    $car->colors_id = $color->id;
    $car->consumptionemissions_id = $cons->id;
    $car->characteristics_id = $char->id;
    $car->save();

    //get image files array
    $uploaded_images = Input::file('imagesUpload');
      
      /*
      // setting up rules
      $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
      // doing the validation, passing post data, rules and the messages
      $validator = Validator::make($image, $rules);
      if ($validator->fails()) {
      // send back to the page with the input data and errors
      return redirect()->route('images.create')->withInput()->withErrors($validator);
      }
        else {
      // checking file is valid.
      */

    foreach ($uploaded_images as $key => $one_uploaded_image) {

      if ($one_uploaded_image->isValid()) 
      {
        $destinationPath = 'img/uploads'; // upload path
        $extension = $one_uploaded_image->getClientOriginalExtension(); // getting image extension
        $fileName = date("y-m-d-h-i-s").'-'.uniqid().'.'.$extension; // renameing image
        $one_uploaded_image->move($destinationPath, $fileName); // uploading file to given path
        
      }
      else {
        // sending back with error message.
        Session::flash('error '.($key+1).'', 'uploaded file' .($key+1). 'is not valid');
        return Redirect::to('images.create');
      }

      // create object and FK in image table
      $image_object = new Image();
      $image_object->car_id = $car->id;
      $image_object->location = 'img/uploads/'.$fileName;
      $image_object->is_main = 0;
      $image_object->save();
     
    }
    Session::flash('success', 'Upload successfully');
    
    return redirect()->route('cars.index');
    //return \Redirect::route('admin.products.edit', 
     //   array($product->id))->with('message', 'Product added!');
    

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
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

  public function check_the_session()
  {
    
  }
  
}

?>