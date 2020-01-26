<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\HttpFoundation\Request;
use App\User;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function firstlogin(Request $request)
    {
        
        $data['email'] = $request->email;
        $user = User::where('email',$request->email)->first();

        if($user && $user->password){
            return view('auth.login',$data);
        }elseif($user){
            return view('auth.login2',$data);
        }else{
            return view('auth.register',$data);
        }
        
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
