<?php

namespace App\Http\Controllers\Admin;


use App\Product;
use App\Lead;
use App\WorkplaceUser;
use Illuminate\Http\Request;
use function foo\func;
use App\Http\Controllers\Controller;
use DataTables;



class LeadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        $query['leads'] = Lead::with('workplaces', 'product', 'source', 'user')->whereHas('product')->filter($request)->get();
        // dd($query['leads'][0]);
        $query['qualified_leads'] = Lead::with('workplaces')->whereHas('product')->qualified()->get();
        $query['last_contact_leads'] = Lead::with('workplaces')->whereHas('product')->lastcontact()->get();
        $query['leads_without_filter'] = Lead::with('workplaces')->whereHas('product')->get();
        $query['users'] = WorkplaceUser::with('user')->whereHas('user.leads')->get();
        $query['products'] = Product::with('users')->whereHas('leads')->get();
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

        return view('admin.leads.leads', $query);
    }

    // public function product_leads($product_id)
    // {
    //     // $query['one_product'] = Product::with('leads')->find($product_id);
    //     $query['leads'] = Lead::with('workplaces')->whereHas('product')->where('product_id', $product_id);

    //     if (isset($_GET['product_id']) && $_GET['product_id'] != 0)
    //         $query['leads']->where('product_id', 'like', '%' . $_GET['product_id'] . '%');

    //     if (isset($_GET['user_id']) && $_GET['user_id'] != 0)
    //         $query['leads']->where('user_id', 'like', '%' . $_GET['user_id'] . '%');

    //     if (isset($_GET['status']))
    //         $query['leads']->where('status', 'like', '%' . $_GET['status'] . '%');

    //     if (isset($_GET['min_date']) && $_GET['min_date'] != '')
    //         $query['leads']->where('leads.created_at', '>=', $_GET['min_date']);

    //     if (isset($_GET['max_date']) && $_GET['max_date'] != '')
    //         $query['leads']->where('leads.created_at', '<=', $_GET['max_date']);

    //     $query['leads'] = $query['leads']->get();

    //     $query['users'] = WorkplaceUser::with('user')->get();
    //     $query['products'] = Product::with('users')->get();
    //     foreach ($query['products'] as $value) {
    //         $selected_ids = array();
    //         foreach ($value->users as $val) {
    //             array_push($selected_ids, $val->id);
    //         }
    //         $value->selected_ids = $selected_ids;
    //     }
    //     // dd($query['one_product']);
    //     return view('admin.leads.leads', $query);
    // }

    public function show(Lead $lead)
    {
        $query['lead'] = $lead;
        $query['ldata'] = $lead->lead;
        // print_r($query['ldata']);exit();
        return view('admin.leads.onelead', $query);
    }
}
