<?php

namespace App\Http\Controllers;

use App\Product;
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
        // dd($query);
        return view('leads.leads', $query);
    }
}
