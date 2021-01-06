<?php

namespace App\Http\Controllers\Admin;

use App\Workplace;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Session;
use DataTables;



/**
 * @group Admin Workplaces management
 *
 * Routes To manage Workplaces data For The Admin Control Panal
 */

class WorkplacesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(Request $request)
    {
        $workplaces = Workplace::withCount(['products', 'users', 'leads'])->filter($request)->get();
        $workplaces_without_filter = Workplace::withCount(['products', 'users', 'leads'])->get();

        if ($request->ajax()) {
            return Datatables::of($workplaces)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return $row;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.workplaces.index', compact('workplaces', 'workplaces_without_filter'));
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

    public function show(Workplace $workplace)
    {
        //
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workplace  $workplace
     * @return \Illuminate\Http\Response
     */
    public function edit(Workplace $workplace)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workplace  $workplace
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workplace $workplace)
    {
        //
    }


    public function getWorkplaceInfo($workplace_id)
    {
        $query['workplace'] = Workplace::with('users')->where('id', $workplace_id)->first();

        Session::put('workplace', $query['workplace']);
        $query['data'] = Product::with('users', 'source', 'source.lead')->where('workplace_id', $workplace_id)->get();
        foreach ($query['data'] as $value) {
            $selected_ids = array();
            foreach ($value->users as $val) {
                array_push($selected_ids, $val->id);
            }
            $value->selected_ids = $selected_ids;
        }
        // dd($query['data']);
        return view('admin.workplaces.products', $query);
    }

    public function product_team($workplace_id, $product_id)
    {
        $query['workplace'] = Workplace::with('products', 'users', 'users.products')->where('id', $workplace_id)->first();
        foreach ($query['workplace']->users as $value) {
            $selected_ids = array();
            foreach ($value->products as $val) {
                array_push($selected_ids, $val->id);
            }
            $value->selected_ids = $selected_ids;
        }
        $query['product_id'] = $product_id;
        return view('admin.workplaces.team', $query);
    }


    // public function user_available(User $user,$is_available)
    // {
    //     $user->is_available = $is_available;
    //     $user->save();
    //     return redirect('admin/workplace')->with('success','Updated Successfully');
    // }
}
