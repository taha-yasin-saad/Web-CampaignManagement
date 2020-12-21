<?php

namespace App\Http\Controllers;

use App\Workplace;
use App\Product;
use App\UserProduct;
use App\WorkplaceUser;
use App\Times;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkplacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $query['workplace'] = Workplace::with('products','users','users.products')->where('id', $workplace_id)->first();
        foreach($query['workplace']->users as $value){
            $selected_ids = array();
            foreach($value->products as $val){
                array_push($selected_ids, $val->id);
            }
            $value->selected_ids = $selected_ids;
        }

        return view('workplaces.team',$query);
    }
    public function product_team($workplace_id,$product_id)
    {
        $query['workplace'] = Workplace::with('products','users','users.products')->where('id', $workplace_id)->first();
        foreach($query['workplace']->users as $value){
            $selected_ids = array();
            foreach($value->products as $val){
                array_push($selected_ids, $val->id);
            }
            $value->selected_ids = $selected_ids;
        }
        $query['product_id'] = $product_id;
        return view('workplaces.team',$query);
    }

    public function edit_user_role(Request $request)
    {
        $save = WorkplaceUser::where('user_id',$request->user_id)->where('workplace_id',$request->workplace_id)->first();
        if($save){
            $save->role = $request->role;
            $save->save();
        }
        return back()->with('success', 'Role Updated Successfully');
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

        $data = $request->except(['_token','_method','title','admin_id','timezone','website','startday','status']);
        $data['workplace_id'] = $workplace->id;
        $times = Times::create($data);
        
        $product_data['title'] = "General";
        $product_data['workplace_id'] = $workplace->id;
        $product = Product::create($product_data);
        $save = new UserProduct;
        $save->user_id = $request->admin_id;
        $save->product_id = $product->id;
        $save->save();

        $data2['email'] = User::find($save->user_id)->email;
        $data2['mm'] = 'You Have Created a new workspace';
        $data2['subject'] = 'new workspace';
        $data2['link'] = '#';
        \Illuminate\Support\Facades\Mail::send('emails.welcome_email', $data2, function ($message) use ($data2) {
            $message->from('support@closor.com', 'CLOSOR')->to($data2['email'], 'CLOSOR')->subject($data2['subject']);
        });
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
        //dd($query['data']);
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
        //dd($request);
        $data = $request->except(['_token','_method']);
        $workplace->update($data);
        $times = Times::where('workplace_id',$workplace->id)->first();
        $data = $request->except(['_token','_method','title','admin_id','timezone','website','startday','status']);
        $data['workplace_id'] = $workplace->id;
        
        if($times){
            Times::where('workplace_id',$workplace->id)->update($data);
        }else{
            $times = Times::create($data);
        }
        $data2['email'] = User::find($workplace->admin_id)->email;
        $data2['mm'] = 'You Have Created a new workspace';
        $data2['subject'] = 'new workspace';
        $data2['link'] = '#';
        \Illuminate\Support\Facades\Mail::send('emails.welcome_email', $data2, function ($message) use ($data2) {
            $message->from('support@closor.com', 'CLOSOR')->to($data2['email'], 'CLOSOR')->subject($data2['subject']);
        });
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

    public function remove_user_from_workspace($user_id, $workspace_id){
        $workspace = WorkplaceUser::where('user_id', $user_id)->where('workplace_id', $workspace_id)->first();
        $workspace->delete();
        $product_user = UserProduct::where('user_id', $user_id)->get();
        foreach($product_user as $user){
            $user->delete();
        }
        return redirect()->back()->with('success','User has been removed from workspace');
    }
    public function active_user_in_workspace($status,$user_id,$workspace_id){
        $workspace = WorkplaceUser::where('user_id', $user_id)->where('workplace_id', $workspace_id)->first();
        $workspace->status= $status;
        $workspace->save();
        return $status;
        // return redirect()->back()->with('success','User has been changed at workspace');
    }

    public function invite($workplace_id){
        $query['workplace'] = Workplace::with('products','users','users.products')->where('id', $workplace_id)->first();
        return view('workplaces.invite',$query);
    }

    public function all_workspaces()
    {
        $all_workspaces = Workplace::all();

        return response()->json(array('code' => '0', 'data' => $all_workspaces), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }
}
