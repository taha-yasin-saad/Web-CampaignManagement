<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Workplace;
use App\WorkplaceUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Symfony\Component\HttpFoundation\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/check';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required','numeric','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        $this->guard()->login($user);
        $data['email'] = $request->email;
        $data['mm'] = 'welcome to Closer';
        $data['subject'] = 'welcome to Closer';
        $data['link'] = '#';
        \Illuminate\Support\Facades\Mail::send('emails.welcome_email', $data, function ($message) use ($data) {
            $message->from('support@closor.com', 'CLOSOR')->to($data['email'], 'CLOSOR')->subject($data['subject']);
        });
        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'country_code' => $data['country_code'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function login2(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $data['email'] = $request->email;
        if ($user && $user->password) {
            return redirect('login')->with('email', $request->email);
        } elseif ($user) {
            $user->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);
            Auth()->loginUsingId($user->id);
            $workPlaceuser = WorkplaceUser::where('user_id', $user->id)->first();
            if($workPlaceuser){
                $workplace = Workplace::where('id', $workPlaceuser->workplace_id)->first();
            }
            if($workplace){
                $owner = User::where('id', $workplace->admin_id)->first();
            }
            if($owner){
                $data['email'] = $owner->email;
                $data['mm'] = 'The User('.$user->name.') who has been invited by you to workspace has been registered';
                $data['subject'] = 'Invitaion Notification';
                $data['link'] = '#';
                \Illuminate\Support\Facades\Mail::send('emails.welcome_email', $data, function ($message) use ($data) {
                    $message->from('support@closor.com', 'CLOSOR')->to($data['email'], 'CLOSOR')->subject($data['subject']);
                });
            }
            return redirect('/check');
        }
    }
}
