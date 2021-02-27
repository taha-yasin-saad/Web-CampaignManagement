<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;

/**
 * @group 1.3  Admin Users management
 *
 * Page Group To manage Users data For The Admin Control Panel .
 *
 * - View the User Data Ex. Name, Email & Phone etc.
 * - Filter an existing Users from the Filter Form .
 * - Manage Users From the Enable & Disable Button .
 *
 * <p><img src="images/admin/users/admin-user-view.png" width="100%"></p>
 *
 * @authenticated
 *
 */
class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Users View Page
     *
     * Is An Admin-Panel User Page That Views users Data Info .
     *
     * Form Filter is used to filtering existing Users To get better results .
     *
     * <p><img src="images/admin/users/admin-user-filter.png" width="100%"></p>
     *
     * View users Data Info
     *
     * - View the User Data Ex. Name, Email & Phone etc.
     *
     * - Manage Users From the Enable & Disable Button .
     *
     * <p><img src="images/admin/users/admin-user-view.png" width="100%"></p>
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
        $users = User::withCount(['products', 'workplaces', 'leads'])->filter($request)->get();
        $users_without_filter = User::withCount(['products', 'workplaces', 'leads'])->get();
        if ($request->ajax()) {
            return Datatables::of($users)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return $row;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.users.index', compact('users', 'users_without_filter'));
    }

    /**
     * Manage Users From the Online & Offline Button
     *
     * <p><img src="images/admin/users/admin-user-enable.png" width="100%"></p>
     *
     * <p><img src="images/admin/updated-successfully.png" width="100%"></p>
     * @authenticated
     *
     * @response  {
     * "success":"Updated Successfully"
     * }
     *
     */

    public function user_available(User $user, $is_available)
    {
        $user->is_available = $is_available;
        $user->save();

        return redirect('admin/user')->with('success', 'Updated Successfully');
    }
    /**
     * Manage Users From the Enable & Disable Button
     *
     * <p><img src="images/admin/users/admin-user-enable.png" width="100%"></p>
     *
     * <p><img src="images/admin/updated-successfully.png" width="100%"></p>
     * @authenticated
     *
     * @response  {
     * "success":"Updated Successfully"
     * }
     *
     */
    public function user_status(User $user, $status)
    {
        $user->status = $status;
        $user->save();

        return redirect('admin/user')->with('success', 'Updated Successfully');
    }
}
