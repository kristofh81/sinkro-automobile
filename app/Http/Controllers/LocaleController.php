<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use URL;
use Cookie;

class LocaleController extends Controller {

    public function setLocale($locale)
    {
        if (! in_array($locale,['en','nl']))
        {
            $locale = 'en';
        }
        Cookie::queue('locale', $locale);
        return redirect(url(URL::previous()));
    }
}