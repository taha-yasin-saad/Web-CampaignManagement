<?php

namespace App\Http\Controllers;

use App\Workplace;
use App\Product;
use App\UserProduct;
use App\WorkplaceUser;
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
        $query['invitations'] = UserProduct::where('user_id', auth()->user()->id)->with('products', 'products.workplace')->get();
        // $query['invitations'] = Product::with('users', 'workplace')->get();
        $query['data'] = Workplace::where('admin_id', auth()->user()->id)->get();
        // dd($query['invitations']);
        return view('workplaces.index', $query);
    }

    public function team($workplace_id)
    {
        $query['workplace'] = Workplace::with('users','users.products')->where('id', $workplace_id)->first();
        return view('workplaces.team',$query);
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

        $data = $request->all();
        $data = $request->validate([
            'admin_id'=>'required',
            'title'=>'required',
            'timezone'=>'required',
            'startday'=>'required',
            'website'=>''
        ]);    
        
        $workplace = Workplace::create($data);
        $save = new WorkplaceUser;
        $save->workplace_id = $workplace->id;
        $save->user_id = $request->admin_id;
        $save->status = 1;
        $save->save();
        
        return redirect('check')->with('success','Edited Successfully');
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
        $id = $workplace->id;
        $query['invitations'] = UserProduct::where('user_id', auth()->user()->id)->whereHas('products', function($q) use ($id){
            $q->where('workplace_id', $id);
        })->get();
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
            'title' => $request->title,
            'timezone' => $request->timezone,
            'startday' => $request->startday,
            'website' => $request->website,
        ]);
        return redirect()->back()->with('success','Edited Successfully');
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
