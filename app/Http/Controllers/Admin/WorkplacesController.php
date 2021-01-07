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
 * @group 1.5  Admin Workplaces management
 *
 * Page Group To manage Workplaces data For The Admin Control Panel .
 *
 * - View the Workplaces Data Ex. Title, Count of Products & Created By etc .
 *
 * <p><img src="images/admin/workplaces/admin-workplaces-view.png" width="100%"></p>
 *
 * @authenticated
 *
 */

class WorkplacesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Workplaces View Page
     *
     * Is An Admin-Panel Workplace Page That Views Workplaces Data Info .
     *
     * Form Filter is used to filtering existing workplaces To get better results .
     *
     * <p><img src="images/admin/workplaces/admin-workplaces-filter.png" width="100%"></p>
     *
     * View Workplace Data Info
     *
     * - View the Workplace Data Ex. Title, Count of Products & Created By etc.
     *
     * <p><img src="images/admin/workplaces/admin-workplaces-view.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response {
     * "id":1,
     * "admin_id":7,
     * "title":"Sherkat",
     * "created_at":"2020-02-14 23:08:32",
     * "updated_at":"2020-06-21 07:21:07",
     * "timezone":"Africa\/Cairo",
     * "website":null,
     * "startday":"Monday",
     * "products_count":5,
     * "users_count":5,
     * "leads_count":12
     * }
     *
     */

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
     * Single Workplace Info View Page
     *
     * Is An Admin-Panel Page For Single Workplace That Views Workplace Data Info .
     *
     * - View Products For the Workplace .
     * - View Products Count For the Single Workplace .
     * - Every Product In the WorkPlace With its Stats Ex. Leads Source Name, Leads count, Contacted Leads Count & Team Names That Assigned to this Product .
     * - Filter Search to go through every table data .
     *
     * <p><img src="images/admin/workplaces/admin-workplace-products.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response {
     * "id":1,
     * "admin_id":7,
     * "title":"Sherkat",
     * "created_at":"2020-02-14 23:08:32",
     * "updated_at":"2020-06-21 07:21:07",
     * "timezone":"Africa\/Cairo",
     * "website":null,
     * "startday":"Monday",
     * "products_count":5,
     * "users_count":5,
     * "leads_count":12
     * }
     *
     */

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

        return view('admin.workplaces.products', $query);
    }

    /**
     * Single Workplace Team Info View Page
     *
     * Is An Admin-Panel Page Workplace Team That Views Workplaces Team Data Info That is assigned to the product to manage into the workplaces .
     *
     * - invite users with the invite button to manage the product that belongs to the workplace .
     * <p><img src="images/admin/workplaces/admin-workplaces-invite.png" width="100%"></p>
     * - counter users that invited to a certain product .
     * <p><img src="images/admin/workplaces/admin-workplaces-counter.png" width="100%"></p>
     *
     *
     * View Workplace Single Product Team Info & Roles
      *
     * - View the Workplace Single Product Team Info & Roles Ex. User Name, Products Names That Assigned to the user & User role, etc.
     *
     * <p><img src="images/admin/workplaces/admin-workplace-team.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response {
     * "id":7,
     * "name":"demo",
     * "phone":"0123456789",
     * "country_code":20,
     * "email":"test@demo.com",
     * "email_verified_at":null,
     * "created_at":"2020-02-03 21:36:19",
     * "updated_at":"2020-12-09 01:46:55"
     * }
     *
     *
     */

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
}
