<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required','numeric','unique:users'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }
    public function login(Request $request)
	{
        $data = $request->email;
        $user = User::where('email',$request->email)->first();
        if($user && $user->password){
			return response()->json(array(
                'code' => 0,
                'id' => $user->id,
                'email' => $user->email,
                'password' => $user->password
                ), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }elseif($user){
            return response()->json(array(
            'code' => 2,
            'id' => $user->id,
            'email' => $user->email
            ), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }else{
            return response()->json(array('code' => 1,'message'=> 'No user in system with this email'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
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
                return response()->json(array('code' => 1,'msg_en'=> 'Wrong Data','msg_ar'=>'خطأ فى البيانات','error'=>$validator->messages()), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }

        $user = User::where('email',$request->email)->first();
        if($user && Hash::check($request->password, $user->password)){
			return response()->json(array(
                'code'      => 0,
                'id'        => $user->id,
                'email'     => $user->email,
                'password'  => $user->password
                ), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }else{
            return response()->json(array('code' => 1,'message'=> 'Please check data you Login Data'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }
    }

    protected function login2(Request $request)
    {
        $data = $request->all();
        $rules = array(
                'email' => 'required',
                'phone' => 'required',
                'name'   => 'required',
                'password'   => 'required',
            );
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
                return response()->json(array('code' => 1,'msg_en'=> 'Wrong Data','msg_ar'=>'خطأ فى البيانات','error'=>$validator->messages()), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }

        $user = User::where('id', $request->id)->first();
        if ($user) {
            $user->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);
            return response()->json(array(
                'code' => '0',
                'id' => $user->id,
                'name' => $user->name,
                'phone' => $user->phone,
                'email' => $user->email,
                'message'=> 'The User('.$user->name.') who has been invited by you to workspace has been registered'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }else{
            return response()->json(array('code' => 1,'message'=> 'No user in system with this email'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }
    }

    protected function update_profile(Request $request)
    {
        $data = $request->all();
        $rules = array(
                'id'     => 'required',
                'email'     => 'required',
                'phone'     => 'required',
                'name'      => 'required',
//                'password'  => 'required',
            );
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
                return response()->json(array('code' => 1,'msg_en'=> 'Wrong Data','msg_ar'=>'خطأ فى البيانات','error'=>$validator->messages()), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }

        $user = User::where('id', $request->id)->first();
        if ($user) {
            $update['name'] = $request->name;
            $update['email'] = $request->email;
            $update['phone'] = $request->phone;
            if(@$request->password && $request->password){
                $update['password'] = Hash::make($request->password);
            }
            $user->update($update);
            return response()->json(array(
                'code' => '0',
                'id' => $user->id,
                'name' => $user->name,
                'phone' => $user->phone,
                'email' => $user->email,
                'message'=> 'The User('.$user->name.') Updated successfully'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }else{
            return response()->json(array('code' => 1,'message'=> 'No user in system with this email'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }
    }
}
