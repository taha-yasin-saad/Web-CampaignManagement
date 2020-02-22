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
        ->orderBy('leads.id')->select('*','products.id as product_id')->get();
        $query['users'] = WorkplaceUser::where('workplace_id',session('workplace')->id)->with('user')->get();
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
