<?php 
namespace App\Http\Controllers;

use Input;
use App;

class LanguageController extends Controller {

  /**
   *
   *
   * @return Response
   */
  public function chooser()
  {
  	$inputl = Input::get('lang');
    
    App::setLocale($inputl);
    
    session(['language', Input::get('lang')]);
    return redirect()->back(); 
  }

}