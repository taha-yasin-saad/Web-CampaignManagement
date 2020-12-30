<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\Http\Requests\ZoneRequest;
use App\Zone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;


class ZoneController extends Controller
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

    public function index(Request $request)
    {
        $query['data'] = Zone::with('countries')->get();

        if ($request->ajax()) {
            return Datatables::of($query['data'])
                ->addIndexColumn()
                ->addColumn('countries', function ($row) {
                    return $row;
                })
                ->addColumn('action', function ($row) {
                    return $row;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.zones.index',$query);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $query['countries'] = Country::all();
        return view('admin.zones.add',$query);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ZoneRequest $request)
    {
        $zone = Zone::create($request->all());
        $zone->countries()->sync($request->country_id);
        return  redirect('admin/zone')->with('success', 'Added Successfully');
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
    public function edit(Zone $zone)
    {
        $query['countries'] = Country::all();
        $query['single'] = $zone;
        return view('admin.zones.add',$query);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ZoneRequest $request, Zone $zone)
    {
        $zone->update($request->all());
        $zone->countries()->sync($request->country_id);
        return  redirect('admin/zone')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
        $zone->countries()->detach();
        $zone->delete();
        return  redirect('admin/zone')->with('success', 'Deleted Successfully');

    }
}
