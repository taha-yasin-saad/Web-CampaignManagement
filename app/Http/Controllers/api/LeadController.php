<?php

namespace App\Http\Controllers\api;
use Illuminate\Http\Request;
use App\Workplace;
use App\Product;
use App\UserProduct;
use App\WorkplaceUser;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

class LeadController extends Controller
{
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
}