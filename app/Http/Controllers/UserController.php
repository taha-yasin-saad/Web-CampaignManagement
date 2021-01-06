<?php

namespace App\Http\Controllers;

use App\User;
use App\Workplace;
use App\WorkplaceUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * @group  Users management
 *
 *
 * Routes To manage Users data For The Manager Control Panal
 */
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users/profile');
    }

    public function dashboard()
    {
        $user_workplaces = Workplace::where('admin_id', auth()->id())->get();
        $query['user_workplaces_count'] =  $user_workplaces->count();
        $user_workplaces_ids = $user_workplaces->pluck('id');
        $query['invited_workplaces_count'] = WorkplaceUser::whereNotIn('workplace_id', $user_workplaces_ids)->where('user_id', auth()->id())->count();
        // dd( $query['invited_workplaces']);
        return view('dashboard', $query);
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

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
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
        // dd($request->country_code);
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'country_code' => 'required'
        ]);
        $user = $user->find(Auth()->user()->id);
        if ($request->password) {
            $request->validate([
                'password' => ['required', 'string', 'min:6'],
            ]);
            $data['password'] =  Hash::make($request['password']);
        }
        $user->update($data);
        return redirect('/')->with('success', 'your profile has been updated successfully');
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
}
