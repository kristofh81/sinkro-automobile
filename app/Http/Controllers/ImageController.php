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
    return view('errors.503');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {   
    return view('cars.images.create');
  }

  /**
   * Store a newly created resource in storage.
   * PART 2 if storing a car : images
   * Request request: retrieve input last request (cars.image.create)
   * Session - 
   *
   * @return Response
   */
  public function store(Request $request, ImageRequest $imgrequest)
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
    } else 
    { 
      //return "some input of page 1 has not been set"; 
      session()->flash('flash_error_session_message', 'I dati sono persi durante la sessione. Riprova.');
      return redirect()->route('cars.create');
    }
    Session::flush();

    $color = Color::create($input_colors);
    $cons = Consumptionemission::create($input_consumptionemission);
    $char = Characteristic::create($input_characteristics);

    //first create a car object and write to DB
    $car = Car::create($input_car);

    // then attach id on pivot tables
    $car->marks()->attach($input_marks_id);
    $car->nations()->attach($input_nations_id);

    //fill car object's FK
    $car->colors_id = $color->id;
    $car->consumptionemissions_id = $cons->id;
    $car->characteristics_id = $char->id;
    $car->save();

    //get image files array
    $uploaded_images = $imgrequest->file('imagesUpload');

    // validation for number of images upload
    if(count($uploaded_images) > 12 ){
      session()->flash('flash_error_countimages_message', 'Hai inserito piu di 12 immagini!');
      return redirect()->route('cars.images.create');
    } else {true;}
  
    foreach ($uploaded_images as $key => $one_uploaded_image) {  

      if ($one_uploaded_image->isValid()) 
      {
        $destinationPath = 'img/uploads'; // upload path
        $extension = $one_uploaded_image->getClientOriginalExtension(); // getting image extension
        $fileName = $car->id .'_' .date("y-m-d-h-i-s").'-'.uniqid().'.'.$extension; // renameing image
        $one_uploaded_image->move($destinationPath, $fileName); // uploading file to given path
        
      }
      else {
        // sending back with error message.
        session()->flash('error '.($key+1).'', 'uploaded file' .($key+1). 'is not valid');
        return Redirect::to('images.create');
      }

      // create object and FK in image table
      $image_object = new Image();
      $image_object->car_id = $car->id;
      $image_object->location = 'img/uploads/'.$fileName;
      $image_object->is_main = 0;
      $image_object->save();
     
    }
    session()->flash('flash_success_compl_message', 'Il veicolo e stato creato!');
    return redirect()->to(url('cars/completion', $car->id));
   
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id = id of the CAR (car->id)!!
   * @return Response
   */
  public function show($id)
  {
    $images = Image::where('car_id', '=', $id)->get();
    return view('cars.images.show')->with(['images'=> $images, 'car_id' => $id]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $car_id = id of the CAR (car->id)!!
   * @return Response
   */
  public function edit($car_id)
  {
    $images = Image::where('car_id', '=', $car_id)->get();
    $count_images_in_db = $images->count();
    return view('cars.images.edit')->with(['images'=> $images, 'car_id' => $car_id, 'count_images_in_db' => $count_images_in_db]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $car_id = id of the CAR (car->id)!!
   * @return Response
   */
  public function update($car_id, ImageRequest $imgrequest)
  {
  
    $count_images_in_db = Image::where('car_id', '=', $car_id)->count();

    $new_uploaded_images = $imgrequest->file('imagesUpload');
    $count_new_uploaded_images = count($new_uploaded_images);

    if (($count_images_in_db + $count_new_uploaded_images) > 12) {
       session()->flash('flash_error_count_total_images_message', 'Hai piu di 12 immagini in totale, elimina prima le immagini originali!');
      return redirect()->route('cars.images.edit', $car_id);
    } else {true;}
    
    foreach ($new_uploaded_images as $key => $one_uploaded_image) {  

      if ($one_uploaded_image->isValid()) 
      {
        $destinationPath = 'img/uploads'; // upload path
        $extension = $one_uploaded_image->getClientOriginalExtension(); // getting image extension
        $fileName = date("y-m-d-h-i-s").'-'.uniqid().'.'.$extension; // renameing image
        $one_uploaded_image->move($destinationPath, $fileName); // uploading file to given path
        
      }
      else {
        // sending back with error message.
        session()->flash('error '.($key+1).'', 'uploaded file' .($key+1). 'is not valid');
        return Redirect::to('images.create');
      }

      // create object and FK in image table
      $image_object = new Image();
      $image_object->car_id = $car_id;
      $image_object->location = 'img/uploads/'.$fileName;
      $image_object->is_main = 0;
      $image_object->save();
    
    }
    session()->flash('flash_success_compl_img_message', 'Altri '.$count_new_uploaded_images.' immagini sono stati aggiunti!');
    return redirect()->to(route('cars.images.edit', $car_id));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id = id of image itself!
   * @return Response
   */
  public function destroy($id)
  {
    $image = Image::findOrFail($id);
    $car_id = $image->car_id;
    $image->delete();

    return redirect()->to(route('cars.images.edit', $car_id));
  }

/**
   * Remove the specified resource from storage.
   *
   * @param  int  $car_id = id of car!
   * @return Response
   */
  public function destroyall($car_id)
  {
    $images = Image::where('car_id', '=', $car_id)->get();
    foreach ($images as $image) {
      Image::destroy($image->id);
    }
      return redirect()->to(route('cars.images.edit', $car_id));
  }

  
}

?>