<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

/**
 * @group 3.3  APIs Password management
 *
 * Page Group To manage User Password From APIs.
 *
 * - Send Reset Password Link.
 *
 * @authenticated
 *
 */
class ResetPasswordController extends Controller
{
    use ResetsPasswords;
    protected $redirectTo = '/';
    /**
     * ResetResponse Password Request
     *
     * ResetResponse Password User By Sending Request To The Email Registered At The website To Reset password.
     *
     * - We will send the password reset link to this user. Once we have attempted to send the link, we will examine the response then see the message we need to show to the user. Finally, we'll send out a proper response.
     *
     *
     *
     * @authenticated
     *
     * @response {
     * "msg_en":"sent Successfully",
     * "msg_ar":"تم الارسال بنجاح"
     * }
     */
    protected function sendResetResponse(Request $request, $response)
    {
        return response(['code' => 0, 'message' => trans($response)]);
    }

    protected function sendResetFailedResponse(Request $request, $response)
    {
        return response(['code' => 1, 'error' => trans($response)]);
    }
}
