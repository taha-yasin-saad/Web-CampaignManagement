<?php

namespace App\Http\Controllers;

use App\Workplace;
use App\WorkplaceUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::check()) {
            return redirect('workplace');
        }else{
            return view('auth.first');
        }
        
    }

    public function check()
    {

        if (Auth::check()) {
            $workplace = WorkplaceUser::where('user_id',Auth::user()->id)->first();
            if($workplace){
                Session::set('workplace', $workplace);
                return redirect($workplace->id.'/products');
            }else{
                return redirect('workplace');
            }
            
        }else{
            return view('auth.first');
        }
        
    }
}
