<?php

namespace App\Http\Controllers\Admin;

use App\Workplace;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Session;


class WorkplacesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(Request $request)
    {
        $query = $request->all();
        $query['data'] = Workplace::withCount(['products', 'users', 'leads'])->filter($request)->get();
        $query['data_without_filter'] = Workplace::withCount(['products', 'users', 'leads'])->get();
        // dd($query['data'][0]);
        return view('admin.workplaces.index', $query);
    }


    public function getWorkplaceInfo($workplace_id)
    {
        $query['workplace'] = Workplace::with('users')->where('id',$workplace_id)->first();

        Session::put('workplace', $query['workplace']);
        $query['data'] = Product::with('users','source', 'source.lead')->where('workplace_id',$workplace_id)->get();
        foreach($query['data'] as $value){
            $selected_ids = array();
            foreach($value->users as $val){
                array_push($selected_ids, $val->id);
            }
            $value->selected_ids = $selected_ids;
        }
        // dd($query['data']);
        return view('admin.workplaces.products', $query);
    }


    // public function user_available(User $user,$is_available)
    // {
    //     $user->is_available = $is_available;
    //     $user->save();
    //     return redirect('admin/workplace')->with('success','Updated Successfully');
    // }
}
