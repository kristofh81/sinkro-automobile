<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nation;

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
  public function store(Request $request)
  {
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

    return $request->all();

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