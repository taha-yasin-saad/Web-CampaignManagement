<?php

namespace App\Http\Controllers;

use App\Product;
use App\Lead;
use App\WorkplaceUser;
use Illuminate\Http\Request;
use function foo\func;
use DataTables;


class LeadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query['leads'] = Lead::with('workplaces', 'product', 'source', 'user')->whereHas('product',function($query){
            $query->where('workplace_id',session('workplace')->id);

        })->filter($request)->get();
        // dd($query['leads'][0]);
        $query['qualified_leads'] = Lead::with('workplaces')->whereHas('product',function($query){
            $query->where('workplace_id',session('workplace')->id);
        })->qualified()->get();
        $query['last_contact_leads'] = Lead::with('workplaces')->whereHas('product',function($query){
            $query->where('workplace_id',session('workplace')->id);
        })->lastcontact()->get();
        $query['leads_without_filter'] = Lead::with('workplaces')->whereHas('product',function($query){
            $query->where('workplace_id',session('workplace')->id);
        })->get();
        $query['users'] = WorkplaceUser::with('user')->where('workplace_id',session('workplace')->id)->whereHas('user.leads')->get();
        $query['products'] = Product::with('users')->where('workplace_id',session('workplace')->id)->whereHas('leads')->get();
        // dd($query['users']);
        foreach ($query['products'] as $value) {
            $selected_ids = array();
            foreach ($value->users as $val) {
                array_push($selected_ids, $val->id);
            }
            $value->selected_ids = $selected_ids;
        }

        if ($request->ajax()) {
            return Datatables::of($query['leads'])
                ->make(true);
        }

        return view('leads.leads', $query);
    }

    public function show(Lead $lead)
    {
        $query['lead'] = $lead;
        $query['ldata'] = $lead->lead;
        // print_r($query['ldata']);exit();
        return view('leads.onelead', $query);
    }
}
