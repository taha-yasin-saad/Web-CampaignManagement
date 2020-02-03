<?php

namespace App\Http\Controllers;

use App\Workplace;
use App\Product;
use App\UserProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkplacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query['invitations'] = UserProduct::where('user_id', auth()->user()->id)->with('workplaces')->get();
        $query['data'] = Workplace::where('admin_id', auth()->user()->id)->get();
        // dd($query['invitations']);
        return view('workplaces.index', $query);
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

        // $workplaces = Workplace::where('admin_id', auth()->user()->id)->get();
        // return view('workplaces.index', compact('workplaces'));
        return redirect('workplace')->with('success','Edited Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workplace  $workplace
     * @return \Illuminate\Http\Response
     */
    public function show(Workplace $workplace)
    {
        $query['workplace'] = $workplace;
        $query['invitations'] = UserProduct::where('workplace_id',$workplace->id)->where('user_id',Auth::id())->with('products')->get();
        $query['data'] = Product::where('workplace_id',$workplace->id)->get();
        return view('products.index', $query);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workplace  $workplace
     * @return \Illuminate\Http\Response
     */
    public function edit(Workplace $workplace)
    {
        $query['data'] = $workplace;
        return view('workplaces.add', $query);
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
        $workplace->update([
            'title' => $request->title
        ]);
        return redirect('workplace')->with('success','Edited Successfully');
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
