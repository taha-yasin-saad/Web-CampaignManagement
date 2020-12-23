<?php

namespace App\Http\Controllers\Admin;

use App\Workplace;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkplacesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(Request $request)
    {
        $query = $request->all();
        $query['data'] = Workplace::withCount(['products','users','leads'])->filter($request)->get();
        $query['data_without_filter'] = Workplace::withCount(['products','users','leads'])->get();
        // dd($query['data'][0]);
        return view('admin.workplaces.index',$query);
    }

    // public function user_available(User $user,$is_available)
    // {
    //     $user->is_available = $is_available;
    //     $user->save();
    //     return redirect('admin/workplace')->with('success','Updated Successfully');
    // }
}
