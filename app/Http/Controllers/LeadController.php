<?php

namespace App\Http\Controllers;

use App\Product;
use App\Lead;
use App\WorkplaceUser;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index(){
        $query['leads'] = Product::where('workplace_id',session('workplace')->id)->join('leads', 'leads.product_id', '=', 'products.id')
        ->orderBy('leads.id')->select('*','products.id as product_id');

        if (isset($_GET['product_id']))
            $query['leads']->where('product_id', 'like', '%' . $_GET['product_id'] . '%');

        if (isset($_GET['status']))
            $query['leads']->where('status', 'like', '%' . $_GET['status'] . '%');

        if (isset($_GET['min_date']) && $_GET['min_date'] != '')
            $query['leads']->where('leads.created_at', '>=', $_GET['min_date']);

        if (isset($_GET['max_date']) && $_GET['max_date'] != '')
            $query['leads']->where('leads.created_at', '<=', $_GET['max_date']);

        $query['leads'] = $query['leads']->get();

        $query['users'] = WorkplaceUser::where('workplace_id',session('workplace')->id)->with('user')->get();
        $query['products'] = Product::with('users')->where('workplace_id',session('workplace')->id)->get();
        foreach($query['products'] as $value){
            $selected_ids = array();
            foreach($value->users as $val){
                array_push($selected_ids, $val->id);
            }
            $value->selected_ids = $selected_ids;
        }
        // dd($query);
        return view('leads.leads', $query);
    }

    public function show(Lead $lead)
    {
        $query['lead'] = $lead;
        $query['ldata'] = json_decode($lead->lead,true);
        // print_r($query['ldata']);exit();
        return view('leads.onelead', $query);
    }
}
