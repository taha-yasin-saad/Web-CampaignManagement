<?php

namespace App\Http\Controllers\Admin;


use App\Product;
use App\Lead;
use App\WorkplaceUser;
use Illuminate\Http\Request;
use function foo\func;
use App\Http\Controllers\Controller;


class LeadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $query['leads'] = Lead::with('workplaces')->whereHas('product');

        if (isset($_GET['product_id']) && $_GET['product_id'] != 0)
            $query['leads']->where('product_id', 'like', '%' . $_GET['product_id'] . '%');

        if (isset($_GET['user_id']) && $_GET['user_id'] != 0)
            $query['leads']->where('user_id', 'like', '%' . $_GET['user_id'] . '%');

        if (isset($_GET['status']))
            $query['leads']->where('status', 'like', '%' . $_GET['status'] . '%');

        if (isset($_GET['min_date']) && $_GET['min_date'] != '')
            $query['leads']->where('leads.created_at', '>=', $_GET['min_date']);

        if (isset($_GET['max_date']) && $_GET['max_date'] != '')
            $query['leads']->where('leads.created_at', '<=', $_GET['max_date']);

        $query['leads'] = $query['leads']->get();

        $query['users'] = WorkplaceUser::with('user')->get();
        $query['products'] = Product::with('users')->get();
        foreach($query['products'] as $value){
            $selected_ids = array();
            foreach($value->users as $val){
                array_push($selected_ids, $val->id);
            }
            $value->selected_ids = $selected_ids;
        }
        // dd($query['leads'][0]);
        return view('admin.leads.leads', $query);
    }

    public function show(Lead $lead)
    {
        $query['lead'] = $lead;
        $query['ldata'] = $lead->lead;
        // print_r($query['ldata']);exit();
        return view('admin.leads.onelead', $query);
    }
}
