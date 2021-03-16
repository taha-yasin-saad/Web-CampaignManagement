<?php

namespace App\Http\Controllers;

use App\Product;
use App\Lead;
use App\WorkplaceUser;
use Illuminate\Http\Request;
use function foo\func;
use DataTables;

/**
 * @group 2.6 Users Manager Leads management
 *
 * Page Group To manage Leads data For The Manager Control Panel .
 *
 * - View the Leads Data Ex. Lead Name, Workplace Product belongs to & Product etc.
 * - Filter an existing Leads from the Filter Form.
 * - View Leads Stats the Qualified & Un Qualified Buttons.
 *
 * <p><img src="images/users/leads/users-leads-view.png" width="100%"></p>
 *
 * @authenticated
 *
 */

class LeadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Leads View Page
     *
     * Is An Control Panel Lead Page That Views leads Data Info .
     *
     * Form Filter is used to filtering existing leads To get better results .
     *
     * <p><img src="images/admin/leads/admin-leads-filter.png" width="100%"></p>
     *
     * View leads Data Info
     *
     * - View the Leads Data Ex. Lead Name, Workplace Product belongs to & Product etc.
     *
     * -View Leads Stats the Qualified & Un Qualified Buttons .
     *
     * <p><img src="images/users/leads/users-leads-view.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response {
     * "id":1,
     * "name":"demo",
     * "phone":"01234567890",
     * "country_code":null,
     * "email":"test@demo.com",
     * "email_verified_at":null,
     * "created_at":"2020-01-26 16:26:56",
     * "updated_at":"2021-01-07 13:35:48",
     * "device_token":null,
     * "os":null,
     * "is_available":1,
     * "products_count":2,
     * "workplaces_count":1,
     * "leads_count":7
     * }
     *
     */
    public function index(Request $request)
    {
        $query['leads'] = Lead::with('workplaces', 'product', 'source', 'user')->whereHas('product', function ($query) {
            $query->where('workplace_id', session('workplace')->id);
        })->filter($request)->orderBy('id', 'desc')->get();
        // dd($query['leads']);
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

        // dd($query['leads']);

        return view('leads.leads', $query);
    }
    /**
     * Single Lead Info View Page
     *
     * Is An Control Panel Page For Single Lead That Views Lead Data Info .
     *
     * - View Products For the Lead.
     * - View Products Count For the Single Lead.
     * - Every Product In the Lead With its Stats Ex. Leads Source Name, Leads count, Contacted Leads Count & Team Names That Assigned to this Product.
     * - Filter Search to go through every table data.
     *
     * <p><img src="images/admin/leads/admin-singlelead-view.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response {
     * "id":9,
     * "workplace_id":8,
     * "user_id":7,
     * "name":"Bottels Website Form",
     * "country_id":null,
     * "website":"https:\/\/popcorn.com",
     * "product_id":11,
     * "widget_type":"text",
     * "alignment":"left",
     * "primary":"#34a853",
     * "secondary":"#ffffff",
     * "icon_type":"mdi mdi-phone fa-fw",
     * "bubble":"on",
     * "bubble_line_1":"Want to talk to an expert?",
     * "bubble_line_2":"Our Team is 60 Second Away From You!",
     * "bubble_bg_color":"#959a9e",
     * "bubble_text_color":"#ffffff",
     * "text_text":"Talk to sales expert now!",
     * "text_round":10
     * }
     *
     */
    public function show(Lead $lead)
    {
        $query['lead'] = $lead;
        $query['ldata'] = $lead->lead;
        // print_r($query['ldata']);exit();
        return view('leads.onelead', $query);
    }
}
