<?php

use App\Workplace;
use App\User;
use App\WorkplaceUser;
use Illuminate\Support\Facades\Auth;

function get_workplaces(){
    $workplaces = WorkplaceUser::with('workplace')->where('user_id',Auth::user()->id)->get();
    return $workplaces;
}
function get_role($workplace_id){
    $user = WorkplaceUser::where('user_id',Auth::user()->id)->where('workplace_id',$workplace_id)->first();
    if($user){
        $role = $user->role;
    }else{
        $role = 9; // 9 for Permisions denied
    }
    //dd($role);
    return $role;
}

?>
