<?php

namespace App\Http\Controllers;

use App\Workplace;
use App\WorkplaceUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

/**
 * @group 2.1 Users Home management
 *
 * Page Group To manage General Data for site.
 *
 * - View the General Data & Routes After Being Authenticated.
 *
 * <p><img src="images/users/home/users-login-page.png" width="100%"></p>
 *
 * @authenticated
 *
 */

class HomeController extends Controller
{

    /**
     * A Users Login View Page
     *
     * User Login Page That Authenticates User license to use the site properly With his personalized data and getting his data from our database for him to serve him.
     *
     *
     * <p><img src="images/users/home/users-login-page.png" width="100%"></p>
     *
     */

    public function index()
    {

        if (Auth::check()) {
            return redirect('check');
        } else {
            return view('auth.first');
        }
    }

    /**
     * Widget View Page
     *
     * Widget View Page That Views Product Widget at any site the did put in and it's so much customizable by the user customize options :
     *
     * - The widget colors
     *
     * - The widget form date Ex. Name, Phone, Email, And Extra 2 Customizable Fields.
     *
     * <p><img src="images/users/home/users-widget-form.png" width="100%"></p>
     *
     * - The User can change the widget icon easily with the customized Edit widget at the control panel.
     *
     * - The User can change the widget Text Message bubble easily with the customized Edit widget at the control panel.
     *
     * <p><img src="images/users/home/users-widget-icon.png" width="100%"></p>
     *
     *
     */

    public function widgetView($id)
    {
        return view('sources/widgetView', compact('id'));
    }

    public function check()
    {
        if (Auth::check()) {
            $check = WorkplaceUser::where('user_id', Auth::user()->id)->first();
            if ($check) {
                $workplace = Workplace::where('id', $check->workplace_id)->first();
                Session::put('workplace', $workplace);
                return redirect($workplace->id . '/products');
            } else {
                return redirect('workplace/create');
            }
        } else {
            return redirect('/');
        }
    }
}
