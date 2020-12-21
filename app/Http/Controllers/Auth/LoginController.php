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
    protected $redirectTo = '/check';

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

            return redirect('login')->with('email', $data['email']);
        }elseif($user){
            return redirect('register')->with('email', $data['email'])->with('invited', 1);
        }else{
            return redirect('register')->with('email', $data['email']);
        }
        
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
