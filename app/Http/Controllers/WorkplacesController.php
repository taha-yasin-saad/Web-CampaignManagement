<?php

namespace App\Http\Controllers;

use App\Log;
use App\Product;
use App\Times;
use App\User;
use App\UserProduct;
use App\Workplace;
use App\WorkplaceUser;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * @group 2.3 Users Workplaces management
 *
 * Page Group To manage Workplaces data For The Manager Control Panel.
 *
 * - View the Workplaces Data Ex. Title, Count of Products & Created By etc.
 *
 * <p><img src="images/users/workplaces/users-workplaces-view.png" width="100%"></p>
 *
 * @authenticated
 *
 */
class WorkplacesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Workplaces View Page
     *
     * Is An Control Panel Manager Workplace Page That Views Workplaces Data Info.
     *
     * View Workplaces Data Info :
     *
     * - View the Workplace Data Ex. Title, Count of Products & Created By etc.
     *
     * <p><img src="images/users/workplaces/users-workplaces-view.png" width="100%"></p>
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
    public function index()
    {
        $query['invitations'] = UserProduct::where('user_id', auth()->user()->id)->with('products', 'products.workplace')->get();
        // $query['invitations'] = Product::with('users', 'workplace')->get();
        $query['data'] = Workplace::where('admin_id', auth()->user()->id)->get();
        // dd($query['invitations']);
        return view('workplaces.index', $query);
    }

    /**
     * Workplace Create Page
     *
     * Is An Control Panel Manager Page That Creates Workplaces To Manage It later on the site by the manager and his team.
     *
     * <p><img src="images/users/workplaces/users-workplaces-create.png" width="100%"></p>
     *
     * @authenticated
     *
     * @bodyParam  title string required The title of the workplace. Example: demo
     * @bodyParam  timezone string required The timezone selected of the workplace. Example: (GMT+02:00) Cairo
     * @bodyParam  website string The website of the workplace. Example: www.demo.com
     * @bodyParam  startday string required The startday selected of Week Start ON for the workplace. Example: Monday
     *
     * @response  {
     * "success":"Added Successfully"
     * }
     *
     */
    public function create()
    {
        $query['start_time'] = '9:00';
        $query['end_time'] = '5:00';
        return view('workplaces.add', $query);
    }

    /**
     * Workplace Store Data
     *
     * Is An Control Panel Manager Data Request That Stores Workplaces Data To Database.
     *
     * <p><img src="images/users/added-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"Added Successfully"
     * }
     *
     */

    public function store(Request $request)
    {

        $data = $request->all();
        $data = $request->validate([
            'admin_id' => 'required',
            'title' => 'required',
            'timezone' => 'required',
            'startday' => 'required',
            'website' => ''
        ]);

        $workplace = Workplace::create($data);

        $save = new WorkplaceUser;
        $save->workplace_id = $workplace->id;
        $save->user_id = $request->admin_id;
        $save->status = 1;
        $save->save();

        $data = $request->except(['_token', '_method', 'title', 'admin_id', 'timezone', 'website', 'startday', 'status']);
        $data['workplace_id'] = $workplace->id;
        $times = Times::create($data);

        $product_data['title'] = "General";
        $product_data['workplace_id'] = $workplace->id;
        $product = Product::create($product_data);
        $save = new UserProduct;
        $save->user_id = $request->admin_id;
        $save->product_id = $product->id;
        $save->save();

        $data2['email'] = User::find($save->user_id)->email;
        $data2['mm'] = 'You Have Created a new workspace';
        $data2['subject'] = 'New Workspace';
        $data2['link'] = '#';
        Log::create([
            'subject' => 'New Workspace',
            'email' => User::find($save->user_id)->email
        ]);
        \Illuminate\Support\Facades\Mail::send('emails.welcome_email', $data2, function ($message) use ($data2) {
            $message->from('support@closor.com', 'CLOSOR')->to($data2['email'], 'CLOSOR')->subject($data2['subject']);
        });
        return redirect('check')->with('success', 'Edited Successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Workplace $workplace
     * @return \Illuminate\Http\Response
     */
    public function show(Workplace $workplace)
    {
        $query['workplace'] = $workplace;
        $id = $workplace->id;
        $query['invitations'] = UserProduct::where('user_id', auth()->user()->id)->whereHas('products', function ($q) use ($id) {
            $q->where('workplace_id', $id);
        })->get();
        $query['data'] = Product::where('workplace_id', $workplace->id)->get();
        return view('products.index', $query);
    }

    /**
     * Workplaces Edit Page
     *
     * Is An Control Panel Manager Page That Edits Workplaces To Manage It later on the site by the manager and his team.
     *
     *
     * @authenticated
     *
     * @bodyParam  title string required The title of the workplace. Example: demo
     * @bodyParam  timezone string required The timezone selected of the workplace. Example: (GMT+02:00) Cairo
     * @bodyParam  website string The website of the workplace. Example: www.demo.com
     * @bodyParam  startday string required The startday selected of Week Start ON for the workplace. Example: Monday
     *
     * @response  {
     * "success":"Updated Successfully"
     * }
     *
     */
    public function edit(Workplace $workplace)
    {
        $query['data'] = $workplace;
        $query['start_time'] = "9:00";
        $query['end_time'] = "5:00";
        // dd($query['data']);
        // $date = date_create('16:00');
        // $format = \Carbon\Carbon::parse($date)->format('a');
        // dd($format);

        return view('workplaces.add', $query);
    }

    /**
     * Workplace Update Data
     *
     * Is An Control Panel Manager Data Request That Updates Workplaces Data To Database.
     *
     * <p><img src="images/users/workplaces/users-workplaces-edit.png" width="100%"></p>
     * <p><img src="images/users/updated-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"Updated Successfully"
     * }
     *
     */
    public function update(Request $request, Workplace $workplace)
    {
        //dd($request);

        $data = $request->except(['_token', '_method']);
        $workplace->update($data);
        $times = Times::where('workplace_id', $workplace->id)->first();
        $data = $request->except(['_token', '_method', 'title', 'admin_id', 'timezone', 'website', 'startday', 'status']);
        $data['workplace_id'] = $workplace->id;
        // "sun_start" => "22:22"
        // "sun_end" => "22:27"
        // dd($data);

        // change time from 12 hr to 24 hr

        //sunday
        if (isset($data['sun_start']) && isset($data['sun_end'])) {
            $sun_start = $data['sun_start']['time'] . $data['sun_start']['am_pm'];
            $data['sun_start'] = Carbon::parse($sun_start)->format('H:i');

            $sun_end = $data['sun_end']['time'] . $data['sun_end']['am_pm'];
            $data['sun_end'] = Carbon::parse($sun_end)->format('H:i');
        } else {
            $data['sun_start'] = null;
            $data['sun_end'] = null;
        }

        //monday
        if (isset($data['mon_start']) && isset($data['mon_end'])) {
            $mon_start = $data['mon_start']['time'] . $data['mon_start']['am_pm'];
            $data['mon_start'] = Carbon::parse($mon_start)->format('H:i');

            $mon_end = $data['mon_end']['time'] . $data['mon_end']['am_pm'];
            $data['mon_end'] = Carbon::parse($mon_end)->format('H:i');
        } else {
            $data['mon_start'] = null;
            $data['mon_end'] = null;
        }

        //tuesday
        if (isset($data['tue_start']) && isset($data['tue_end'])) {
            $tue_start = $data['tue_start']['time'] . $data['tue_start']['am_pm'];
            $data['tue_start'] = Carbon::parse($tue_start)->format('H:i');

            $tue_end = $data['tue_end']['time'] . $data['tue_end']['am_pm'];
            $data['tue_end'] = Carbon::parse($tue_end)->format('H:i');
        } else {
            $data['tue_start'] = null;
            $data['tue_end'] = null;
        }

        //wednesday
        if (isset($data['wed_start']) && isset($data['wed_end'])) {
            $wed_start = $data['wed_start']['time'] . $data['wed_start']['am_pm'];
            $data['wed_start'] = Carbon::parse($wed_start)->format('H:i');

            $wed_end = $data['wed_end']['time'] . $data['wed_end']['am_pm'];
            $data['wed_end'] = Carbon::parse($wed_end)->format('H:i');
        } else {
            $data['wed_start'] = null;
            $data['wed_end'] = null;
        }

        //thursday
        if (isset($data['thu_start']) && isset($data['thu_end'])) {
            $thu_start = $data['thu_start']['time'] . $data['thu_start']['am_pm'];
            $data['thu_start'] = Carbon::parse($thu_start)->format('H:i');

            $thu_end = $data['thu_end']['time'] . $data['thu_end']['am_pm'];
            $data['thu_end'] = Carbon::parse($thu_end)->format('H:i');
        } else {
            $data['thu_start'] = null;
            $data['thu_end'] = null;
        }

        //friday
        if (isset($data['fri_start']) && isset($data['fri_end'])) {
            $fri_start = $data['fri_start']['time'] . $data['fri_start']['am_pm'];
            $data['fri_start'] = Carbon::parse($fri_start)->format('H:i');

            $fri_end = $data['fri_end']['time'] . $data['fri_end']['am_pm'];
            $data['fri_end'] = Carbon::parse($fri_end)->format('H:i');
        } else {
            $data['fri_start'] = null;
            $data['fri_end'] = null;
        }

        //saturday
        if (isset($data['sat_start']) && isset($data['sat_end'])) {
            $sat_start = $data['sat_start']['time'] . $data['sat_start']['am_pm'];
            $data['sat_start'] = Carbon::parse($sat_start)->format('H:i');

            $sat_end = $data['sat_end']['time'] . $data['sat_end']['am_pm'];
            $data['sat_end'] = Carbon::parse($sat_end)->format('H:i');
        } else {
            $data['sat_start'] = null;
            $data['sat_end'] = null;
        }
        // dd($data);

        if ($times) {
            Times::where('workplace_id', $workplace->id)->update($data);
        } else {
            $times = Times::create($data);
        }
        $data2['email'] = User::find($workplace->admin_id)->email;
        $data2['mm'] = 'You Have Created a new workspace';
        $data2['subject'] = 'New Workspace';
        $data2['link'] = '#';
        Log::create([
            'subject' => 'New Workspace',
            'email' => User::find($workplace->admin_id)->email
        ]);
        \Illuminate\Support\Facades\Mail::send('emails.welcome_email', $data2, function ($message) use ($data2) {
            $message->from('support@closor.com', 'CLOSOR')->to($data2['email'], 'CLOSOR')->subject($data2['subject']);
        });
        return redirect()->back()->with('success', 'Edited Successfully');
    }

    /**
     * Workplace Delete Data
     *
     * Is An Control Panel Workplace Data Request That Delete Workplaces Data From Database .
     *
     * <p><img src="images/admin/moderators/admin-moderator-delete.png" width="100%"></p>
     * <p><img src="images/users/deleted-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"Deleted Successfully"
     * }
     *
     */
    public function destroy(Workplace $workplace)
    {
        $workplace->delete();
        return back();
    }

    /**
     * Invited Workplaces Page
     *
     * Is An Control Panel User Page That shows the user The Workplaces That User Invited to.
     *
     * <p><img src="images/users/workplaces/users-workplaces-invited_workplaces.png" width="100%"></p>
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
    public function invited_workplaces()
    {
        $user_workplaces_ids = Workplace::where('admin_id', auth()->id())->pluck('id');
        $invited_workplaces_ids = WorkplaceUser::whereNotIn('workplace_id', $user_workplaces_ids)->where('user_id', auth()->id())->pluck('id');

        $query['data'] = Workplace::withCount(['products', 'users', 'leads'])->whereIn('id', $invited_workplaces_ids)->get();
        // dd($query['data']);
        return view('workplaces.invited_workplaces', $query);
    }

    /**
     * User Workplaces Page
     *
     * Is An Control Panel User Page That shows the user The Workplaces That User Is The Owner.
     *
     * <p><img src="images/users/workplaces/users-workplaces-view.png" width="100%"></p>
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
    public function user_workplaces()
    {
        $query['data'] = Workplace::withCount(['products', 'users', 'leads'])->where('admin_id', auth()->id())->get();

        return view('workplaces.user_workplaces', $query);
    }

    /**
     * User Workplaces Remove Request
     *
     * Is An Control Panel User Request That Removes user From Workplaces.
     *
     * <p><img src="images/users/workplaces/users-workplaces-remove_user_from_workspace0.png" width="100%"></p>
     * <p><img src="images/users/workplaces/users-workplaces-remove_user_from_workspace1.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"User Removed From The workspace Successfully"
     * }
     *
     */

    public function remove_user_from_workspace($user_id, $workspace_id)
    {
        $workspace = WorkplaceUser::where('user_id', $user_id)->where('workplace_id', $workspace_id)->first();
        $workspace->delete();
        $product_user = UserProduct::where('user_id', $user_id)->get();
        foreach ($product_user as $user) {
            $user->delete();
        }
        return redirect()->back()->with('success', 'User has been removed from workspace');
    }

    /**
     * User Workplaces active Request
     *
     * Is An Control Panel User Request That actives user From Workplaces.
     *
     * <p><img src="images/users/workplaces/users-workplaces-active_user_from_workspace.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"User actived At workspace Successfully"
     * }
     *
     */

    public function active_user_in_workspace($status, $user_id, $workspace_id)
    {
        $workspace = WorkplaceUser::where('user_id', $user_id)->where('workplace_id', $workspace_id)->first();
        $workspace->status = $status;
        $workspace->save();
        return $status;
        // return redirect()->back()->with('success','User has been changed at workspace');
    }

    /**
     * User Invite To Product Page
     *
     * Is An Control Panel User Page That Invites user To Product And assign a role To work in the product with it.
     *
     * <p><img src="images/users/workplaces/users-workplaces-invite_user.png" width="100%"></p>
     * <p><img src="images/users/workplaces/users-workplaces-invite_user_product.png" width="100%"></p>
     *
     *
     * @authenticated
     *
     * @response  {
     * "success":"User invited To Product Successfully"
     * }
     *
     */


    public function invite($workplace_id)
    {
        $query['workplace'] = Workplace::with('products', 'users', 'users.products')->where('id', $workplace_id)->first();
        return view('workplaces.invite', $query);
    }

    /**
     * User Invite To Product Request
     *
     * Is An Control Panel User Request That Invites users To Product And assign a role To work in the product with it.
     *
     * <p><img src="images/users/workplaces/users-workplaces-invite_user.png" width="100%"></p>
     * <p><img src="images/users/workplaces/users-workplaces-invite_user_product.png" width="100%"></p>
     *
     * @bodyParam  email string The email of the workplace. Example: test@demo.com
     * @bodyParam  products string required The products selected That Assigned To User. Example: Product
     * @bodyParam  role int required The role selected of User permission on certin product. Example: Sales Agent
     *
     * @authenticated
     *
     * @response  {
     * "success":"User invited To Product Successfully"
     * }
     *
     */

    public function invite_member_workplace(Request $request)
    {
        // dd($request);
        //check if user can be existed
        $user = User::where('email', $request->email)->first();
        //save in Users if new Email
        if (!$user) {
            $user = new User;
            $user->email = $request->email;
            $user->is_available = 0;
            $user->save();
        }

        $old_products = $user->products_workplace($request->workplace_id)->pluck('products.id')->toArray();
        $user->products()->detach($old_products);
        $user->products()->attach($request->products);

        $save = WorkplaceUser::where('user_id', $user->id)->where('workplace_id', $request->workplace_id)->first();
        if (!$save) {
            $save = new WorkplaceUser;
            $save->workplace_id = $request->workplace_id;
            $save->user_id = $user->id;
            $save->role = $request->role;
            $save->status = 1;
            $save->save();
        }

        //send invitation email
        $data['subject'] = 'CLOSOR Invitation';
        $data['email'] = $request->email;
        Log::create([
            'subject' => 'CLOSOR Invitation',
            'email' => $request->email
        ]);
        \Illuminate\Support\Facades\Mail::send('auth.email_invite', $data, function ($message) use ($data) {
            $message->from('support@closor.com', 'CLOSOR')->to($data['email'], 'CLOSOR')->subject($data['subject']);
        });
        return redirect($request->workplace_id . '/team')->with('success', 'Email invited Successfully');
    }

    public function all_workspaces()
    {
        $all_workspaces = Workplace::all();

        return response()->json(array('code' => '0', 'data' => $all_workspaces), 200, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    /**
     * Single Workplace Team Info View Page
     *
     * Is An Control Panel Page Workplace Team That Views Certain Workplace Team Data Info That is assigned to the product to manage into the workplace.
     *
     * - invite users with the invite button to manage the product that belongs to the workplace.
     *
     * <p><img src="images/admin/workplaces/admin-workplaces-invite.png" width="100%"></p>
     *
     * - counter users that invited to a certain product.
     *
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

    public function team($workplace_id)
    {
        $query['workplace'] = Workplace::with('products', 'users', 'users.products')->where('id', $workplace_id)->first();
        foreach ($query['workplace']->users as $value) {
            $selected_ids = array();
            foreach ($value->products as $val) {
                array_push($selected_ids, $val->id);
            }
            $value->selected_ids = $selected_ids;
        }

        return view('workplaces.team', $query);
    }

    /**
     * Single Workplace Team Info View Page
     *
     * Is An Control Panel Page Workplace Team That Views Certain Workplace Team Data Info That is assigned to the product to manage into the workplace.
     *
     * - invite users with the invite button to manage the product that belongs to the workplace.
     *
     * <p><img src="images/admin/workplaces/admin-workplaces-invite.png" width="100%"></p>
     *
     * - counter users that invited to a certain product.
     *
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
        $query['product'] = Product::find($product_id);
        $query['product_id'] = $product_id;
        return view('workplaces.team', $query);
    }

    /**
     * Edit User Role
     *
     * Is An Control Panel User Request That Updates User Role To Database.
     *
     * <p><img src="images/users/workplaces/users-workplaces-edit_user_role.png" width="100%"></p>
     * <p><img src="images/users/updated-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"Role Updated Successfully"
     * }
     *
     */
    public function edit_user_role(Request $request)
    {
        $save = WorkplaceUser::where('user_id', $request->user_id)->where('workplace_id', $request->workplace_id)->first();
        if ($save) {
            $save->role = $request->role;
            $save->save();
        }
        return back()->with('success', 'Role Updated Successfully');
    }
}
