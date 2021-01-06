<?php

namespace App\Http\Controllers\Admin;


use App\Product;
use App\Lead;
use App\WorkplaceUser;
use Illuminate\Http\Request;
use function foo\func;
use App\Http\Controllers\Controller;
use DataTables;


/**
 * @group  Admin Leads management
 *
 * Routes To manage Leads data For The Admin Control Panal
 */
class LeadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of Leads.
     *
     * @response  {
     * "id":1,
     * "name":"kareem222",
     * "product_id":6,
     * "user_id":null,
     * "source_id":9,
     * "phone":"1234567654",
     * "email":"kareemkima@gmail.com\r\n",
     * "scheduled_on":null,
     * "last_contact":null,
     * "status":2,
     * "lead":[
      {
     * "key":"name",
     * "value":"kareem222"
      },
      {
     * "key":"phone",
     * "value":"1234567654"
      },
      {
     * "key":"mobile",
     * "value":"22345678987654"
      },
      {
     * "key":"source",
     * "value":"Bottels Website Form"
      },
      {
     * "key":"product",
     * "value":"Product test"
      }
   ],
     * "created_at":"2020-02-23 04:10:22",
     * "updated_at":"2020-10-01 07:07:08",
     * "workplaces":{
     * "id":6,
     * "admin_id":2,
     * "title":"My work",
     * "created_at":"2020-02-20 04:39:36",
     * "updated_at":"2020-02-20 04:39:36",
     * "timezone":"Africa\/Cairo",
     * "website":null,
     * "startday":"Monday",
     * "laravel_through_key":6,
     * "times":null,
     * "admin":{
     * "id":2,
     * "name":"ahmed kamal",
     * "phone":"123456789",
     * "country_code":null,
     * "email":"kamal@gmail.com",
     * "email_verified_at":null,
     * "created_at":"2020-01-27 13:18:17",
     * "updated_at":"2020-12-28 15:23:53",
     * "device_token":null,
     * "os":null,
     * "is_available":1
      }
   },
     * "product":{
     * "id":6,
     * "workplace_id":6,
     * "title":"Product test",
     * "created_at":"2020-02-20 04:40:06",
     * "updated_at":"2020-02-20 04:40:06"
   },
     * "source":{
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
     * "text_round":10,
     * "fields":[
     * "name",
     * "email",
     * "custom1",
     * "custom2"
      ],
     * "custom_lable_1":"Country",
     * "custom_lable_2":"Job Title",
     * "submitt_text":"Call\r\n Me Now",
     * "created_at":"2020-10-01 16:42:32",
     * "updated_at":"2020-10-01 16:42:32"
   },
     * "user":null
     * }
     * @response  404 {
     *  "message": "haha query results for model [\App\User]"
     * }
     * @response  401 {
     *  "message": "lol query results for model [\App\User]"
     * }
     */

    public function index(Request $request)
    {
        $query['leads'] = Lead::with('workplaces', 'product', 'source', 'user')->whereHas('product')->filter($request)->get();
        $query['qualified_leads'] = Lead::with('workplaces')->whereHas('product')->qualified()->get();
        $query['last_contact_leads'] = Lead::with('workplaces')->whereHas('product')->lastcontact()->get();
        $query['leads_without_filter'] = Lead::with('workplaces')->whereHas('product')->get();
        $query['workplace_users'] = WorkplaceUser::with('user')->whereHas('user.leads')->get();
        // dd($query['workplace_users'][0]);
        $query['products'] = Product::with('users')->whereHas('leads')->get();
        // dd($query['leads'][0]);
        // echo json_encode($query['leads'][0]);
        // exit;


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
