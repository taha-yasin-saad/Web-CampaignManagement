<?php

namespace App\Http\Controllers;

use App\Workplace;
use App\WorkplaceUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

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
            return redirect('check');
        }else{
            return view('auth.first');
        }
        
    }

    public function check()
    {

        if (Auth::check()) {
            $check = WorkplaceUser::where('user_id',Auth::user()->id)->first();
            if($check){
                $workplace = Workplace::where('id',$check->workplace_id)->first();
                Session::put('workplace', $workplace);
                return redirect($workplace->id.'/products');
            }else{
                return redirect('workplace/create');
            }
        }else{
            return view('auth.first');
        }
        
    }
}
