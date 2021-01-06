<?php

namespace App\Http\Controllers;

use App\Product;
use App\Lead;
use App\WorkplaceUser;
use Illuminate\Http\Request;
use function foo\func;
use DataTables;

/**
 * @group  Manager Leads management
 *
 * Routes To manage Leads data For The Manager Control Panal
 */

class LeadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @response  [
     *
     * "last_contact_leads" && "qualified_leads" && "leads" && "leads_without_filter" => {
     * "id" => 1
     * "name" => "kareem222"
     * "product_id" => 6
     * "user_id" => null
     * "source_id" => 9
     * "phone" => "1234567654"
     * "email" => "kareemkima@gmail.com"
     * "scheduled_on" => null
     * "last_contact" => null
     * "status" => 2
     * "lead" => "{"name":"kareem222","phone":"1234567654","product_id":"6","mobile":"22345678987654"}"
     * "created_at" => "2020-02-23 04:10:22"
     * "updated_at" => "2020-10-01 07:07:08"
     * }
     *
     * "users" => {
     * "id" => 1
     * "user_id" => 7
     * "workplace_id" => 1
     * "role" => 0
     * "status" => 1
     * "created_at" => "2020-02-14 23:08:32"
     * "updated_at" => "2020-03-06 11:19:07"
     * }
     *
     * "products" => {
     * "id" => 2
     * "workplace_id" => 4
     * "title" => "vola p2"
     * "created_at" => "2020-02-16 17:17:53"
     * "updated_at" => "2020-02-16 17:17:53"
     * "selected_ids" => []
     * }
     *
     *
     * ]
     */
    public function index(Request $request)
    {
        $query['leads'] = Lead::with('workplaces', 'product', 'source', 'user')->whereHas('product', function ($query) {
            $query->where('workplace_id', session('workplace')->id);
        })->filter($request)->get();
        // dd($query['leads'][0]);
        $query['qualified_leads'] = Lead::with('workplaces')->whereHas('product', function ($query) {
            $query->where('workplace_id', session('workplace')->id);
        })->qualified()->get();
        $query['last_contact_leads'] = Lead::with('workplaces')->whereHas('product', function ($query) {
            $query->where('workplace_id', session('workplace')->id);
        })->lastcontact()->get();
        $query['leads_without_filter'] = Lead::with('workplaces')->whereHas('product', function ($query) {
            $query->where('workplace_id', session('workplace')->id);
        })->get();
        $query['users'] = WorkplaceUser::with('user')->where('workplace_id', session('workplace')->id)->whereHas('user.leads')->get();
        $query['products'] = Product::with('users')->where('workplace_id', session('workplace')->id)->whereHas('leads')->get();
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

    public function show(Lead $lead)
    {
        $query['lead'] = $lead;
        $query['ldata'] = $lead->lead;
        // print_r($query['ldata']);exit();
        return view('leads.onelead', $query);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        //
    }
}
