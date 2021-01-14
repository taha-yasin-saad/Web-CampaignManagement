<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * @group  0.1 Admin Login management
 *
 * Route for Login Admin & Moderator
 */
class AdminLoginController extends Controller
{
    /**
     * Admin Login Page
     *
     * Admin Data Page That Login Admin To the Website and give him access if the validation was right To the Website.
     *
     * <p><img src="images/admin/admin-login-page.png" width="100%"></p>
     *
     *
     * @bodyParam  email string required The email of the Admin. Example: test@demo.com
     * @bodyParam  password string required The password of the Admin. Example: *****
     *
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
    public function showlogin()
    {
        return view('admin.login');
    }
    /**
     * Admin Login Request
     *
     * Admin Data Request That Login Admin To the Website and give him access if the validation was right To the Website.
     *
     * <p><img src="images/admin/admin-login-page.png" width="100%"></p>
     *
     *
     * @bodyParam  email string required The email of the Admin. Example: test@demo.com
     * @bodyParam  password string required The password of the Admin. Example: *****
     *
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
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:6'],
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password,], $request->remember)) {
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
