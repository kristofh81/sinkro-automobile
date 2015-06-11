<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ImageRequest;

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
    return view('images');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(ImageRequest $request)
  {
    $files = $request->file('filesUpload');

     $car = new Car(array(
      'name' => $request->get('name'),
      'sku'  => $request->get('sku')
    ));

    $product->save();

    foreach ($files as $file) {
    $imageName = $product->id . '.' . 
        $request->file('filesUpload[]')->getClientOriginalExtension();

    $request->file('image')->move(
        base_path() . '/public/img/', $imageName
    );
    }
    return \Redirect::route('admin.products.edit', 
        array($product->id))->with('message', 'Product added!');
     
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
  
}

?>