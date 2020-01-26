<?php

namespace App\Http\Controllers;

use App\Mark;
use Illuminate\Http\Request;

class MarkController extends Controller
{
     public function validateRequest(){
        return request()->validate([
            'title' => 'required',
            'image' => 'required|file|image|max:5000'
        ]) ;
    }
    public function storedImage(){
        $file = request()->file('image');
        $name = 'markimage'.time().$file->getClientOriginalName();
        request()->image->store('uploads', 'public');
        $file->move(public_path('uploads'),$name);
        return $name;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $query['data'] = Mark::all();
        return view('mark/index', $query);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mark/edit');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $this->storedImage();

        Mark::create([
            'title' => $request->title,
            'image' =>  $name
        ]);

        return redirect('mark')->with('success','Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Mark $mark)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Mark $mark)
    {
        $query['data'] = $mark;
        return view('mark/edit', $query);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mark $mark)
    {
        
        if ($request->hasFile('image')) {
            $name = $this->storedImage();
        }else{
            $name = $mark->image;
        }

        $mark->update([
            'title' => $request->title,
            'image' =>  $name
        ]);
        return redirect()->back()->with('success','Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mark $mark)
    {
        $mark->delete();
        return redirect('mark')->with('success','تم الحذف بنجاح');
    }

}
