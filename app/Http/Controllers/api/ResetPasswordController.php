<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;
    protected $redirectTo = '/';
    protected function sendResetResponse(Request $request, $response)
    {
        return response(['code' => 0,'message'=> trans($response)]);

    }

    protected function sendResetFailedResponse(Request $request, $response)
    {
        return response(['code' => 1,'error'=> trans($response)]);
    }
}
