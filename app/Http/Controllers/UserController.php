<?php

namespace App\Http\Controllers;

use App\Lead;
use App\Product;
use App\User;
use App\Workplace;
use App\WorkplaceUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * @group 2.2 Users Users management
 *
 * Page Group To manage Users data For The Manager Control Panel .
 *
 * - View the User Data Ex. Name, Email & Phone etc.
 * - Filter an existing Users from the Filter Form .
 * - Manage Users From the Enable & Disable Button .
 *
 * <p><img src="images/users/home/users-profile-page.png" width="100%"></p>
 *
 * @authenticated
 *
 */
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Dashboard Page
     *
     *
     * Is A Dashboard Page That Shows Lists Of Stats & General Data Of The Site In General That User can view stats and make decisions from the stats brief in front of him to manage the Workplace more efficient.
     *
     * <p><img src="images/users/dashboard.png" width="100%"></p>
     *
     * - Statistics For All The Workplaces.
     * - Diagrams For Data Of Products.
     * - Diagrams For Data Of Teams.
     * - Diagrams For Data Of Leads.
     * - Counter For Products of All Workplaces.
     * - Counter For Team of All Workplaces.
     * - Counter For Leads of All Workplaces.
     *
     *
     *
     * @authenticated
     *
     * @response  {
     * "user_workplaces_count":19,
     * "invited_workplaces_count":28
     * }
     *
     */

    public function dashboard()
    {
        $user_workplaces = Workplace::where('admin_id', auth()->id())->get();
        $query['user_workplaces_count'] =  $user_workplaces->count();
        $user_workplaces_ids = $user_workplaces->pluck('id');
        $query['invited_workplaces_count'] = WorkplaceUser::whereNotIn('workplace_id', $user_workplaces_ids)->where('user_id', auth()->id())->count();
        // dd($query);

        $query['recent_products'] = Product::with('workplace','users')->where('workplace_id', session('workplace')->id)->withCount('leads')->orderBy('id','desc')->limit(6)->get();

        $query['max_count_leads_products'] = Product::with('workplace')->where('workplace_id', session('workplace')->id)->withCount('leads')->orderBy('leads_count','desc')->limit(6)->get();

        $query['max_count_members_workplaces'] = Workplace::where('admin_id', auth()->id())->with('users')->withCount('users')->orderBy('users_count','desc')->limit(6)->get();
        // dd($query['recent_products']);

        // $query['years'] = User::get();
        // $query['leads_yearly'] = Lead::get();
        // $query['users_yearly'] = User::with('products')->where('products.user_id', auth()->id())->selectRaw('COUNT(*) as users_yearly_count, YEAR(created_at) year')->groupBy('year')->orderBy('id','asc')->get();

        $query['workplaces_chart'] = Workplace::where('admin_id', auth()->id())->with('users')->selectRaw('COUNT(*) as workplaces_count, YEAR(created_at) year, MONTH(created_at) month')->groupBy('year', 'month')->orderBy('id','asc')->limit(5)->get();

        $query['products_chart'] = Product::with('users')->where('workplace_id', session('workplace')->id)->selectRaw('COUNT(*) as products_count, YEAR(created_at) year, MONTH(created_at) month')->groupBy('year', 'month')->orderBy('id','asc')->limit(5)->get();
    // dd($query['workplaces_chart']);

        // $query['max_count_leads_products'] = Product::with('workplace')->where('workplace_id', session('workplace')->id)->withCount('leads')->orderBy('leads_count','desc')->limit(6)->get();

    //     $query['leads_yearly'] = Lead::selectRaw('COUNT(*) as leads_yearly_count, YEAR(created_at) year')->groupBy('year')->orderBy('id','asc')->get();
        return view('dashboard', $query);
    }

    /**
     * User Profile Page
     *
     * Is An User Page That Views User Personal Data Info To The User That user can update it for later use.
     *
     *
     * View user Data Info
     *
     * - View the User Data Ex. Name, Email & Phone etc.
     *
     * - Manage User Data Change Ex. Name, Email, Phone & Password.
     *
     * <p><img src="images/users/home/users-profile-page.png" width="100%"></p>
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

    public function index()
    {
        return view('users/profile');
    }


    /**
     * User Update Data
     *
     * User Data Request That Updates User Data To Database.
     *
     * <p><img src="images/users/home/users-profile-page.png" width="100%"></p>
     * <p><img src="images/admin/updated-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"Updated Successfully"
     * }
     *
     */

    public function update(Request $request, User $user)
    {
        // dd($request->country_code);
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'country_code' => 'required'
        ]);
        $user = $user->find(Auth()->user()->id);
        if ($request->password) {
            $request->validate([
                'password' => ['required', 'string', 'min:6'],
            ]);
            $data['password'] =  Hash::make($request['password']);
        }
        $user->update($data);
        return redirect('/')->with('success', 'your profile has been updated successfully');
    }
}
