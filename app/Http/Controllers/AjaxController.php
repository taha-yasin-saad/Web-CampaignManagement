<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function phoneCode($code){
        $iso = $code;
        $country_code = Country::where('iso', $iso)->first()->phonecode;
        return $country_code;
    }

    public function isoCode($code){
        $code = $code;
        $data = Country::where('phonecode', $code)->first()->iso;
        return $data;
    }
}
