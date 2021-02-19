<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
/**
 * @group  0.4 Admin Password Reset management
 *
 * Route for Password Reset Admin & Moderator & User
 */
class ForgotPasswordController extends Controller
{
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

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
