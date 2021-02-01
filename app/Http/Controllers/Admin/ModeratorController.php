<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Requests\ModeratorRequest;
use App\Zone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @group 1.2  Admin Moderator management
 *
 * Page Group To manage Moderator data For The Admin Control Panel .
 *
 * - View the moderator Data Ex. Name, Email & Phone .
 * - Create New Moderators for the Site .
 * - Edit an existing Moderators from the Edit Button .
 * - Delete Moderators From the delete Button .
 *
 * <p><img src="images/admin/moderators/admin-moderator-management.png" width="100%"></p>
 *
 * @authenticated
 *
 */

class ModeratorController extends Controller
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
     * Moderators View Page
     *
     * Is An Admin-Panel Moderator Page That Views Moderators Data Info .
     *
     * <p><img src="images/admin/moderators/admin-moderator-view.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response {
     *   "id":2,
     *   "name":"Demo Mato",
     *   "phone":123456789,
     *   "email":"test@demo.com",
     *   "created_at":"2020-12-29 14:13:08",
     *   "updated_at":"2020-12-29 14:13:08",
     *   "role":1
     *   }
     *
     */

    public function index()
    {
        $query['data'] = Admin::where('role', 1)->get();

        return view('admin.moderators.index', $query);
    }

    /**
     * Moderator Create Page
     *
     * Is An Admin-Panel Moderator Page That Creates Moderators To Manage The Web Site Generally .
     *
     * <p><img src="images/admin/moderators/admin-moderator-create.png" width="100%"></p>
     *
     * @authenticated
     *
     * @bodyParam  name string required The name of the user. Example: demo
     * @bodyParam  email string required The email of the user. Example: test@demo.com
     * @bodyParam  phone int required The phone of the user. Example: +0123456789
     * @bodyParam  zones string The Zone selected of the user. Example: Alex
     *
     * @response {
     *   "id":2,
     *   "name":"Demo Mato",
     *   "phone":123456789,
     *   "email":"test@demo.com",
     *   "created_at":"2020-12-29 14:13:08",
     *   "updated_at":"2020-12-29 14:13:08",
     *   "role":1
     *   }
     *
     */
    public function create()
    {
        $query['zones'] = Zone::all();

        return view('admin.moderators.add', $query);
    }

    /**
     * Moderator Store Data
     *
     * Is An Admin-Panel Moderator Data Request That Stores Moderators Data To Database .
     *
     * <p><img src="images/admin/added-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"Added Successfully"
     * }
     *
     */
    public function store(ModeratorRequest $request)
    {
        $data = $request->all();
        $data['role'] = Admin::$ROLE_MODERATOR;  // Moderator
        $data['password'] = bcrypt($request->password);
        $admin = Admin::create($data);
        $admin->zones()->sync($request->zone_id);

        return  redirect('admin/moderator')->with('success', 'Added Successfully');
    }

    /**
     * Moderator Edit Page
     *
     * Is An Admin-Panel Moderator Page That Edits Moderators To Manage The Web Site Generally .
     *
     * @authenticated
     *
     * @bodyParam  name string required The name of the user. Example: demo .
     * @bodyParam  email string required The email of the user. Example: test@demo.com .
     * @bodyParam  phone int required The phone of the user. Example: +0123456789 .
     * @bodyParam  zones string The Zone selected of the user. Example: Alex .
     *
     * @response {
     *   "id":2,
     *   "name":"Demo Mato",
     *   "phone":123456789,
     *   "email":"test@demo.com",
     *   "created_at":"2020-12-29 14:13:08",
     *   "updated_at":"2020-12-29 14:13:08",
     *   "role":1
     *   }
     *
     */
    public function edit(Admin $moderator)
    {
        $query['single'] = $moderator;
        $query['zones'] = Zone::all();

        return view('admin.moderators.add', $query);
    }

    /**
     * Moderator Update Data
     *
     * Is An Admin-Panel Moderator Data Request That Updates Moderators Data To Database .
     *
     * <p><img src="images/admin/moderators/admin-moderator-update.png" width="100%"></p>
     * <p><img src="images/admin/updated-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"Updated Successfully"
     * }
     *
     */
    public function update(ModeratorRequest $request, Admin $moderator)
    {
        $data = $request->all();
        if ($request->password)
            $data['password'] = bcrypt($request->password);
        else
            unset($data['password']);
        $moderator->update($data);
        $moderator->zones()->sync($request->zone_id);
        return  redirect('admin/moderator')->with('success', 'Updated Successfully');
    }

    /**
     * Moderator Delete Data
     *
     * Is An Admin-Panel Moderator Data Request That Delete Moderators Data From Database .
     *
     * <p><img src="images/admin/moderators/admin-moderator-delete.png" width="100%"></p>
     * <p><img src="images/admin/deleted-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"Deleted Successfully"
     * }
     *
     */
    public function destroy(Admin $moderator)
    {
        $moderator->zones()->detach();
        $moderator->delete();
        return  redirect('admin/moderator')->with('success', 'Deleted Successfully');
    }
}
