<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Requests\ModeratorRequest;
use App\Zone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModeratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $query['data'] = Admin::where('role',1)->get();
        return view('admin.moderators.index',$query);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $query['zones'] = Zone::all();
        return view('admin.moderators.add',$query);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModeratorRequest $request)
    {
        $data = $request->all();
        $data['role'] = Admin::$ROLE_MODERATOR;  // Moderator
        $data['password'] = bcrypt($request->password);
        $admin = Admin::create($data);
        $admin->zones()->sync($request->zone_id);
        return  redirect('admin/moderator')->with('success', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $moderator)
    {
        $query['single'] = $moderator;
        $query['zones'] = Zone::all();
        return view('admin.moderators.add',$query);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ModeratorRequest $request, Admin $moderator)
    {
        $data = $request->all();
        if($request->password)
            $data['password'] = bcrypt($request->password);
        else
            unset($data['password']);
        $moderator->update($data);
        $moderator->zones()->sync($request->zone_id);
        return  redirect('admin/moderator')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $moderator)
    {
        $moderator->zones()->detach();
        $moderator->delete();
        return  redirect('admin/moderator')->with('success', 'Deleted Successfully');
    }
}
