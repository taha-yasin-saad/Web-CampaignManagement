<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

/**
 * @group 2.1  Ajax Request management
 *
 * Routes for managing Ajax Request for site
 *
 * - Get the country phone code .
 *
 * - Get the country data info .
 *
 */

class AjaxController extends Controller
{
    /**
     * country phone code for site
     *
     * - Get the country phone code .
     *
     * @response {
     * "iso":"AL",
     * "name":"ALBANIA"
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
     * country data info for site
     *
     * - Get the country data info .
     *
     * @response {
     * "phonecode":355
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
