<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Password;
use Validator;
/**
 * @group 3.4  APIs Reset Password Request
 *
 * Page Group To manage User Password From APIs.
 *
 * - Send Reset Password Link.
 *
 * @authenticated
 *
 */
class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    protected $redirectTo = '/';

    protected function sendResetLinkResponse(Request $request, $response)
    {
        return response(['code' => 0, 'msg_en' => 'sent Successfully', 'msg_ar' => 'تم الارسال بنجاح']);
    }
    /**
     * Reset Password Request
     *
     * Reset Password User By Sending Request To The Email Registered At The website To Reset password.
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
    public function sendResetLinkEmail(Request $request)
    {
        $data = Input::all();
        $rules = array(
            'email' => 'required|email|exists:users,email'
        );
        $messaages_ar = [
            'email.required' => 'حقل البريد الالكتروني مطلوب',
            'email.email' => 'حقل البريد الالكتروني يجب ان يكون ايميلا صحيحا',
            'email.exists' => 'حقل البريد الالكتروني موجود من قبل',
        ];
        $validator = Validator::make($data, $rules);
        $validator_ar = Validator::make($data, $rules, $messaages_ar);
        if ($validator->fails()) {
            return response()->json(array('code' => 1, 'msg_en' => implode(",", $validator->messages()->all()), 'msg_ar' => implode(",", $validator_ar->messages()->all())), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        } else {
            $response = $this->broker()->sendResetLink(
                $this->credentials($request)
            );

            return $response == Password::RESET_LINK_SENT
                ? $this->sendResetLinkResponse($request, $response)
                : $this->sendResetLinkFailedResponse($request, $response);
        }
        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.

    }
    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return response(['code' => 1, 'msg_en' => "Something Wrong", 'msg_ar' => "يوجد خطأ ما"]);
    }
}
