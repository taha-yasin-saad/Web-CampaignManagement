<?php

namespace App\Http\Controllers\Auth;

use App\Log;
use App\User;
use App\Http\Controllers\Controller;
use App\Workplace;
use App\WorkplaceUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Symfony\Component\HttpFoundation\Request;

/**
 * @group 0.3 Register management
 *
 * Route for Register Users
 */
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
     * User Register Page
     *
     * User Data Request That Register User To the Website and give him access if the validation was right To the Website.
     *
     * <p><img src="images/users/users-register-page.png" width="100%"></p>
     *
     *
     * @bodyParam  name string required The name of the user. Example: demo
     * @bodyParam  email string required The email of the user. Example: test@demo.com
     * @bodyParam  phone string required The phone of the user. Example: 123456
     * @bodyParam  country_code string required The country_code of the user. Example: +20
     * @bodyParam  password string required The password of the user. Example: ******
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
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        $this->guard()->login($user);
        $data['email'] = $request->email;
        $data['mm'] = 'welcome to Closer';
        $data['subject'] = 'welcome to Closer';
        $data['link'] = '#';
        Log::create([
            'subject' => 'Welcome to Closer',
            'email' => $request->email
        ]);
        \Illuminate\Support\Facades\Mail::send('emails.welcome_email', $data, function ($message) use ($data) {
            $message->from('support@closor.com', 'CLOSOR')->to($data['email'], 'CLOSOR')->subject($data['subject']);
        });
        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }
    /**
     * User Register Request
     *
     * User Data Request That Register User To the Website and give him access if the validation was right To the Website.
     *
     * <p><img src="images/users/users-register-page.png" width="100%"></p>
     *
     *
     * @bodyParam  name string required The name of the user. Example: demo
     * @bodyParam  email string required The email of the user. Example: test@demo.com
     * @bodyParam  phone string required The phone of the user. Example: 123456
     * @bodyParam  country_code string required The country_code of the user. Example: +20
     * @bodyParam  password string required The password of the user. Example: ******
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
    /**
     * User Register Page
     *
     * User Data Request That Register User To the Website and give him access if the validation was right To the Website.
     *
     * <p><img src="images/users/users-register-page.png" width="100%"></p>
     *
     *
     * @bodyParam  name string required The name of the user. Example: demo
     * @bodyParam  email string required The email of the user. Example: test@demo.com
     * @bodyParam  phone string required The phone of the user. Example: 123456
     * @bodyParam  country_code string required The country_code of the user. Example: +20
     * @bodyParam  password string required The password of the user. Example: ******
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
                $data['subject'] = 'Invitation Notification';
                $data['link'] = '#';
                Log::create([
                    'subject' => 'Invitation Notification',
                    'email' => $owner->email
                ]);
                \Illuminate\Support\Facades\Mail::send('emails.welcome_email', $data, function ($message) use ($data) {
                    $message->from('support@closor.com', 'CLOSOR')->to($data['email'], 'CLOSOR')->subject($data['subject']);
                });
            }
            return redirect('/check');
        }
    }
}
