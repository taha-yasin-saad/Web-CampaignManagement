<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lead;
use Illuminate\Support\Facades\Input;

class LeadController extends Controller
{
    public function create_lead(Request $request){
				$data = Input::all();
				$rules = array(
						'product_id' => 'required',
						'phone' => 'required',
						'name'   => 'required',
					);
				$validator = Validator::make($data, $rules);
				if ($validator->fails()) {
						return response()->json(array('code' => 1,'msg_en'=> 'Wrong Data','msg_ar'=>'Wrong Data','error'=>$validator->messages()), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
				} else {
                    $lead = new Lead();
                    $lead->product_id = $data->product_id;
                    $lead->phone = $data->phone;
                    $lead->name = $data->name;
                    $lead->lead = json_encode(Input::all());
					return response()->json(array('code' => '0', 'msg_en' => 'Request Has been Sent Successfully', 'msg_ar' => 'تم إرسال الطلب بنجاح'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
				}
    }
}
