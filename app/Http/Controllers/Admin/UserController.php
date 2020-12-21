<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(Request $request)
    {
        $query = $request->all();
        $query['data'] = User::withCount(['products','workplaces','leads'])->filter($request)->get();
        return view('admin.users.index',$query);
    }

    public function user_available(User $user,$is_available)
    {
        $user->is_available = $is_available;
        $user->save();
        return redirect('admin/user')->with('success','Updated Successfully');
    }
}
