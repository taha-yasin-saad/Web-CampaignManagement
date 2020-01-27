<?php

namespace App\Http\Controllers;

use App\Workplace;
use Illuminate\Http\Request;

class WorkplacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workplaces = Workplace::where('admin_id', auth()->user()->id)->get();
        // dd($workplaces);
        return view('workplaces.index', compact('workplaces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workplaces.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required',
            'admin_id'=>'required'
        ]);
        Workplace::create($data);

        $workplaces = Workplace::where('admin_id', auth()->user()->id);
        return view('workplaces.index', compact('workplaces'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workplace  $workplace
     * @return \Illuminate\Http\Response
     */
    public function show(Workplace $workplace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workplace  $workplace
     * @return \Illuminate\Http\Response
     */
    public function edit(Workplace $workplace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workplace  $workplace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workplace $workplace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workplace  $workplace
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workplace $workplace)
    {
        $workplace->delete();
        return back();
    }
}
