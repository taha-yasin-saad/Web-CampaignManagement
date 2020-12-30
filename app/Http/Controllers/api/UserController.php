<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Country;

class UserController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'unique:users'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }
    public function login(Request $request)
    {
        $data = $request->email;
        $user = User::where('email', $request->email)->first();
        if ($user && $user->password && $user->is_available == 1) {
            return response()->json(array(
                'code' => 0,
                'id' => $user->id,
                'email' => $user->email,
                'password' => $user->password
            ), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        } elseif ($user && $user->is_available == 1) {
            return response()->json(array(
                'code' => 2,
                'id' => $user->id,
                'email' => $user->email
            ), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        } elseif ($user && $user->is_available == 0) {
            return response()->json(array('code' => 3, 'message' => 'Your Account Has Been Disabled By The Admin'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        } else {
            return response()->json(array('code' => 1, 'message' => 'No user in system with this email'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }
    }

    public function login1(Request $request)
    {
        $data = $request->all();

        $rules = array(
            'email'     => 'required',
            'password'  => 'required',
        );

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json(array('code' => 1, 'msg_en' => 'Wrong Data', 'msg_ar' => 'خطأ فى البيانات', 'error' => $validator->messages()), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }

        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password) && $user->is_available == 1) {
            if ($request->device_token) {
                $user->update([
                    'device_token' => $request->device_token,
                    'os' => $request->os
                ]);
            }
            if ($user->country_code) {
                $iso = Country::where('phonecode', $user->country_code)->first();
                if ($iso) {
                    $user['country_iso'] = $iso->iso;
                } else {
                    $user['country_iso'] = "EG";
                }
            } else {
                $user['country_code'] = 20;
                $user['country_iso'] = "EG";
            }
            return response()->json(array(
                'code'      => 0,
                'user'        => $user,
            ), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        } elseif ($user && Hash::check($request->password, $user->password) && $user->is_available == 0) {
            return response()->json(array('code' => 2, 'message' => 'Your Account Has Been Disabled By The Admin'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        } else {
            return response()->json(array('code' => 1, 'message' => 'Please check data you Login Data'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }
    }

    protected function login2(Request $request)
    {
        $data = $request->all();
        $rules = array(
            'email' => 'required',
            'phone' => 'required',
            'country_code' => 'required',
            'name'   => 'required',
            'password'   => 'required',
        );
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(array('code' => 1, 'msg_en' => 'Wrong Data', 'msg_ar' => 'خطأ فى البيانات', 'error' => $validator->messages()), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }

        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->update([
                'name' => $request->name,
                'country_code' => $request->country_code,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'device_token' => $request->device_token,
                'os' => $request->os
            ]);
            return response()->json(array(
                'code' => 0,
                'user' => $user,
                'message' => 'The User(' . $user->name . ') who has been invited by you to workspace has been registered'
            ), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        } else {
            return response()->json(array('code' => 1, 'message' => 'No user in system with this email'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }
    }

    public function change_is_available(Request $request)
    {
        $data = $request->all();
        $rules = array(
            'user_id'       => 'required',
            'is_available'  => 'required|in:0,1',
        );
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(array('code' => 1, 'msg_en' => 'Wrong Data', 'msg_ar' => 'خطأ فى البيانات', 'error' => $validator->messages()), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }
        $user = User::where('id', $request->user_id)->first();
        $user->update(['is_available' => $request->is_available]);
        return response()->json(array('code' => 0, 'msg_en' => 'Updated Successfully', 'msg_ar' => 'تم التعديل بنجاح'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    protected function update_profile(Request $request)
    {
        $data = $request->all();
        $rules = array(
            'id'     => 'required',
            'email'     => 'required|unique:users,email,' . $request->id,
            'phone'     => 'required',
            'country_code'     => 'required',
            'name'      => 'required',
            //                'password'  => 'required',
        );
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(array('code' => 1, 'msg_en' => 'Wrong Data', 'msg_ar' => 'خطأ فى البيانات', 'error' => $validator->messages()), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }

        $user = User::where('id', $request->id)->first();
        $iso = $request->country_iso;
        if ($iso) {
            $country = Country::where('iso', $iso)->first();
            if ($country) {
                $country_code = $country->phonecode;
            } else {
                $country_code = 20;
            }
        } else {
            $country_code = 20;
        }
        if ($user) {
            $update['name'] = $request->name;
            $update['email'] = $request->email;
            $update['phone'] = $request->phone;
            $update['country_code'] = $country_code;
            if (@$request->password && $request->password) {
                $update['password'] = Hash::make($request->password);
            }
            $user->update($update);
            return response()->json(array(
                'code' => 0,
                'id' => $user->id,
                'name' => $user->name,
                'phone' => $user->phone,
                'country_code' => $user->country_code,
                'country_iso' => $request->country_iso,
                'email' => $user->email,
                'message' => 'The User(' . $user->name . ') Updated successfully'
            ), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        } else {
            return response()->json(array('code' => 1, 'message' => 'No user in system with this email'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }
    }
}
