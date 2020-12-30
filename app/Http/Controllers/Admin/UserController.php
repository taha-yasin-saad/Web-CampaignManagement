<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(Request $request)
    {
        $users = User::withCount(['products', 'workplaces', 'leads'])->filter($request)->get();
        $users_without_filter = User::withCount(['products', 'workplaces', 'leads'])->get();
        if ($request->ajax()) {
            return Datatables::of($users)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return $row;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.users.index', compact('users','users_without_filter'));
    }

    public function user_available(User $user, $is_available)
    {
        $user->is_available = $is_available;
        $user->save();
        return redirect('admin/user')->with('success', 'Updated Successfully');
    }
}
