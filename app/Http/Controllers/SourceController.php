<?php

namespace App\Http\Controllers;

use App\Source;
use Illuminate\Http\Request;
use App\Workplace;
use App\Product;

/**
 * @group Lead Sources management
 *
 * Routes To manage Lead Sources data For The Manager Control Panal
 */
class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workplace_id = session('workplace')->id;
        $query['workplace'] = Workplace::with('users')->where('id',$workplace_id)->first();
        $query['data'] = Source::where('workplace_id',$workplace_id)->get();
        // dd($query['data']);
        return view('sources.index',$query);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $workplace_id = session('workplace')->id;
        $query['products'] = Product::with('users')->where('workplace_id',$workplace_id)->get();
        $query['workplace'] = Workplace::with('users')->where('id',$workplace_id)->first();
        // dd($query['products']);
        return view('sources.add',$query);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $product = Source::create($data);

        return redirect('sources')->with('success', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function show(Source $source)
    {
        // dd($source);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function edit(Source $source)
    {
        $query['products'] = Product::with('users','workplace')->where('workplace_id',$source->workplace_id)->get();
        $query['data'] = $source;

        return view('sources.edit',$query);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Source $source)
    {
        $source->update($request->all());
        return redirect('sources')->with('success', 'Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function destroy(Source $source)
    {
        //
    }
}
