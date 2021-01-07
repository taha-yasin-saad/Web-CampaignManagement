<?php

namespace App\Http\Controllers;

use App\Workplace;
use App\WorkplaceUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

/**
 * @group 2.1  Home management
 *
 * Page Group To manage General data for site .
 *
 * - View the General Data & Routes.
 *
 * <p><img src="images/users/home/users-login-page.png" width="100%"></p>
 *
 * @authenticated
 *
 */

class HomeController extends Controller
{

    /**
     * Users Login View Page
     *
     * Is An Admin-Panel User Login Page .
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

    public function design()
    {
        return view('sources.design');
    }

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
