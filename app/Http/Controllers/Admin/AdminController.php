<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\ExceptionHandler;
use App\Lead;
use App\Product;
use App\User;
use App\Workplace;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


/**
 * @group 1.1  Admin management
 *
 *
 * Page Group To manage Admin data & Lists Stats Of The Site In General .
 *
 * <p><img src="images/admin/admin-login-page.png" width="100%"></p>
 *
 * <p><img src="images/admin/admin-management.png" width="100%"></p>
 *
 * @authenticated
 *
 */
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    /**
     * Dashboard
     *
     *
     * Is A Dashboard Page That Shows Lists Of Stats & General Data Of The Site In General That admin can view stats and make decisions from the stats brief in front of him to manage the site more efficient .
     *
     * <p><img src="images/admin/dashboard.png" width="100%"></p>
     *
     * - Statistics For All The Site .
     * - Diagrams For Data Of Workplaces.
     * - Diagrams For Data Of Products.
     * - Diagrams For Data Of Users.
     * - Diagrams For Data Of Leads.
     * - Counter For Workplaces All Over the Site .
     * - Counter For Products All Over the Site .
     * - Counter For Users All Over the Site .
     * - Counter For Leads All Over the Site .
     *
     *
     *
     * @authenticated
     *
     * @response  {
     * "workplaces_count":19,
     * "products_count":28,
     * "users_count":32,
     * "leads_count":86
     * }
     *
     */

    public function index()
    {
        $query['workplaces_count'] = Workplace::count();
        $query['products_count'] = Product::count();
        $query['users_count'] = User::count();
        $query['leads_count'] = Lead::count();

        $query['recent_products'] = Product::with('workplace', 'users')->withCount('leads')->orderBy('id', 'desc')->limit(6)->get();

        $query['max_count_leads_products'] = Product::with('workplace')->withCount('leads')->orderBy('leads_count', 'desc')->limit(6)->get();

        $query['max_count_members_workplaces'] = Workplace::with('users')->withCount('users')->orderBy('users_count', 'desc')->limit(6)->get();
        // dd($query['recent_products']);

        // $query['years'] = User::get();
        // $query['leads_yearly'] = Lead::get();
        $query['users_yearly'] = User::selectRaw('COUNT(*) as users_yearly_count, YEAR(created_at) year')->groupBy('year')->orderBy('id', 'asc')->limit(5)->get();
        $query['leads_yearly'] = Lead::selectRaw('COUNT(*) as leads_yearly_count, YEAR(created_at) year')->groupBy('year')->orderBy('id', 'asc')->limit(5)->get();
        // dd($query['leads_yearly']);


        return view('admin.dashboard', $query);
    }

    /**
     * View Exceptions
     *
     *
     * Is A View Exceptions Page That Shows Lists Of Stats & Exceptions Data Of The Site In Exceptions That admin can view stats and make decisions from the stats brief in front of him to manage the site more efficient .
     *
     * <p><img src="images/admin/dashboard.png" width="100%"></p>
     *
     *
     *
     * @authenticated
     *
     * @response  {
     * "workplaces_count":19,
     * "products_count":28,
     * "users_count":32,
     * "leads_count":86
     * }
     *
     */

    public function view_exceptions()
    {
        $query['data'] = ExceptionHandler::with('user')->where('user_id', '!=', null)->orderBy('id', 'desc')->limit(100)->get();

        return view('admin.view_exceptions.index', $query);
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
