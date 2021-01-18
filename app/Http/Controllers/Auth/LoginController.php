<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\HttpFoundation\Request;
use App\User;

/**
 * @group 0.2 Login management
 *
 * Route for Login Users
 */
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */



    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/check';

    /**
     * User Login Page
     *
     * User Data Page That Login User To the Website and give him access if the validation was right To the Website.
     *
     * <p><img src="images/users/users-login-page.png" width="100%"></p>
     *
     *
     * @bodyParam  email string required The email of the User. Example: test@demo.com
     * @bodyParam  password string required The password of the User. Example: *****
     *
     *
     * @authenticated
     *
     * @response {
     * "id":1,
     * "name":"demo",
     * "phone":"01234567890",
     * "country_code":null,
     * "email":"test@demo.com",
     * "email_verified_at":null,
     * "created_at":"2020-01-26 16:26:56",
     * "updated_at":"2021-01-07 13:35:48",
     * "device_token":null,
     * "os":null,
     * "is_available":1,
     * "products_count":2,
     * "workplaces_count":1,
     * "leads_count":7
     * }
     *
     */

    public function firstlogin(Request $request)
    {

        $data['email'] = $request->email;
        $user = User::where('email', $request->email)->first();
        if ($user && $user->password && $user->status == 1) {
            return redirect('login')->with('email', $data['email']);
        } elseif ($user && $user->password && $user->status == 0) {
            return redirect('/')->with('status', 'Your Account Has Been Disabled By The Admin');
        } elseif ($user) {
            return redirect('register')->with('email', $data['email'])->with('invited', 1);
        } else {
            return redirect('register')->with('email', $data['email']);
        }
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
