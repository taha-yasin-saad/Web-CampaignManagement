<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

/**
 * @group 2.1 Users Get Data Behind the scene.
 *
 * Routes for Getting Data Request for site :
 *
 * - Personalize the country phone code.
 *
 * - Personalize the country data info.
 *
 */

class AjaxController extends Controller
{
    /**
     * Personalize User Phone Code
     *
     * - Personalize the Country Phone Code for later user at the site EX. +2.
     *
     * @response {
     * "phonecode":355
     * }
     *
     */
    public function phoneCode($code)
    {
        $iso = $code;
        $country_code = Country::where('iso', $iso)->first()->phonecode;
        return $country_code;
    }
    /**
     * Personalize User Country Data info
     *
     * - Personalize User Country Data info for later user at the site EX. ALBANIA.
     *
     * @response {
     * "iso":"AL",
     * "name":"ALBANIA"
     * }
     *
     */
    public function isoCode($code)
    {
        $code = $code;
        $data = Country::where('phonecode', $code)->first()->iso;
        return $data;
    }
}
