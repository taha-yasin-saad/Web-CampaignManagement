<?php

namespace App\Http\Controllers\api;

use App\Events\NotificationEvent;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lead;
use Illuminate\Support\Facades\Input;
use App\Workplace;
use App\Product;
use App\UserProduct;
use App\WorkplaceUser;
use App\Source;
use Validator;

/**
 * @group 3.2  APIs Workplaces management
 *
 * APIs for managing Workplaces
 */
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

    public function all_leads()
	{
        $all_leads = Lead::with('source','product','user')->orderBy('id','desc')->get();
        return response()->json(array('code' => '0', 'data' => $all_leads), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }
    public function user_leads(User $user)
	{
        $all_leads = $user->leads()->with('source','product','user')->orderBy('id','desc')->get();
        $workplace = $user->workplaces()->first();
        foreach ($all_leads as $lead){
            $lead->created_at_time_zone = Carbon::createFromFormat('Y-m-d H:i:s',$lead->created_at,$workplace->timezone);
            $lead->created_at_human = Carbon::parse($lead->created_at_time_zone)->diffForhumans();
        }
        return response()->json(array('code' => '0', 'data' => $all_leads), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    public function qualified(Request $request)
    {
        $data = $request->all();
        $rules = array(
                'id'     => 'required',
                'status'     => 'required',
            );
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
                return response()->json(array('code' => 1,'msg_en'=> 'Wrong Data','msg_ar'=>'خطأ فى البيانات','error'=>$validator->messages()), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }

        $lead = Lead::where('id', $request->id)->first();

        if($request->status != 0 && $request->status != 1 && $request->status != 2){
            return response()->json(array('code' => 1,'message'=> 'Status must be 0 or 1 or 2'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }

        if ($lead) {
            $lead->update([
                $lead->status = $request->status,
            ]);

            return response()->json(array('code' => 0,
            'id' => $lead->id,
            'status' => $lead->status,
            'message'=> 'Qualified Status Changed Successfully'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }else{
            return response()->json(array('code' => 1,'message'=> 'No Lead in system with this id'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }
    }

    public function test_notification_device(Request $request)
    {
        $lead = Lead::first();
        $res = $this::firebase_sent($lead,$request->device_token,$request->message);
        return response()->json(array('code' => 0,
            'lead' => $lead,
            'res' => $res,
            'message'=> 'Sent Successfully'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    public function test_notification_user(Request $request)
    {
        $lead = Lead::first();
        $user = User::find($request->user_id);
        if(!$user){
            return response()->json(array('code' => 1,'message'=> 'No User'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }
        $res = $this::firebase_sent($lead,$user->device_token,$request->message);
        return response()->json(array('code' => 0,
            'lead' => $lead,
            'res' => $res,
            'message'=> 'Sent Successfully'), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    public function firebase_sent($lead,$device_token,$message)
    {
        $API_ACCESS_KEY = 'AAAAAmEDn3w:APA91bGBWdD0XkzwivgPc_0qF0xt_V9NaRCDl59s0x54Qxjh6EPpSASsWgKF26fI9bVyJppiJnM5E7wxG25OiJ1iiLktyTa0pQiTChustIzH3CraEpAcaQJw9W02C1sKl9qBNrXY0Lmm';
        $data = $lead;
        $fields = [
            'to' => $device_token,
            // 'notification' => [
            //     'title' => 'CLOSOR',
            //     'body' => $message,
            //     'vibrate'   => 1,
            //     'sound'     => "default",
            //     'click_ action'=>'FCM_PLUGIN_ACTIVITY'
            // ],

            "priority" => "high",
            'data' => [
                'data' =>$data,
                // "landing_page"=>"second",
                // "price"=>"$3,000.00"
            ]
        ];
        $headers = [
            'Authorization: key=' . $API_ACCESS_KEY,
            'Content-Type: application/json'
        ];
        #Send Reponse To FireBase Server
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        curl_close($ch);
        #Echo Result Of FireBase Server
        $res = json_decode($result, true);
        return $res;
    }

     public function widget_ajax(Request $request){
        if(!$request->phone){
            return 0;
        }
        $data = $request->all();
        unset($data['phone']);
        unset($data['country_code']);
        $data["phone"] = $request->country_code .$request->phone;

        $user = Source::find($request->source_id)->workplace->users()->withCount('leads')->orderBy('leads_count', 'asc')->first();

        if(!@$request->product_id && !$request->product_id){
            $product_id = Source::find($request->source_id)->workplace->products()->first()->id;
        }else{
            $product_id = $request->product_id;
        }
        $save = new Lead;
        $save->source_id = $request->source_id;
        $save->user_id = $user->id;
        $save->product_id = $product_id;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->phone = $request->country_code .$request->phone;
        $save->lead = json_encode($data);
        $save->save();

        event(new NotificationEvent($save));

        return 1;
    }

}
