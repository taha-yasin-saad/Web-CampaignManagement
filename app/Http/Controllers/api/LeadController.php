<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lead;
use Illuminate\Support\Facades\Input;
use App\Workplace;
use App\Product;
use App\UserProduct;
use App\WorkplaceUser;
use Validator;

class LeadController extends Controller
{
    public function create_lead(Request $request){
				$data = $request->all();
				$rules = array(
						'product_id' => 'required',
						'phone' => 'required',
						'name'   => 'required',
					);
				$validator = Validator::make($data, $rules);
				if ($validator->fails()) {
						return response()->json(array('code' => 1,'msg_en'=> 'Wrong Data','msg_ar'=>'خطأ فى البيانات','error'=>$validator->messages()), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
				} else {
                    $lead = new Lead();
                    $lead->product_id = $request->product_id;
                    $lead->phone = $request->phone;
                    $lead->name = $request->name;
                    $lead->lead = json_encode($request->all());
                    $lead->save();
					return response()->json(array('code' => '0', 'msg_en' => 'Request Has been Sent Successfully', 'msg_ar' => 'تم إرسال الطلب بنجاح'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
				}
    }

    public function all_workplaces()
	{
        $all_workplaces = Workplace::all();

        return response()->json(array('code' => '0', 'data' => $all_workplaces), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
	}
	public function all_products(Request $request)
	{
			$workplace_id = $request->workplace_id;
			$workplace = Workplace::find($request->workplace_id);
			if (!$workplace) {
				$msg = "There is no any Work Place with that ID";
				return response()->json(array('code' => 1,'msg'=>$msg), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
			}
			$all_products = Product::where('workplace_id',$workplace_id)->get();
			// print_r($workplace_id);exit();

			return response()->json(array('code' => '0', 'data' => $all_products), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }
    public function allleads() {
        
        $lead = Lead::all();
        $custom1= json_decode($lead->lead);

        return response()->json(array(
        'code' => '0','data' => $lead), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    public function all_leads()
	{
        $all_leads = Lead::with('source')->get();

        return response()->json(array('code' => '0', 'data' => $all_leads), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
	}
    
}
