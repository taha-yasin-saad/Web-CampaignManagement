<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;

/**
 * @group Admin Users management
 *
 *
 * Routes To manage Users data For The Admin Control Panal
 */
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
        return view('admin.users.index', compact('users', 'users_without_filter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function user_available(User $user, $is_available)
    {
        $user->is_available = $is_available;
        $user->save();
        return redirect('admin/user')->with('success', 'Updated Successfully');
    }
}
