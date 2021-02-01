<?php

use App\Workplace;
use App\User;
use App\WorkplaceUser;
use Illuminate\Support\Facades\Auth;

function get_workplaces($user_id){
    $workplaces = WorkplaceUser::with('workplace')->where('user_id',$user_id)->get();
    return $workplaces;
}
function get_role($workplace_id){
    $user_id = Workplace::find($workplace_id)->admin_id;
    $user = WorkplaceUser::where('user_id',$user_id)->where('workplace_id',$workplace_id)->first();
    if($user){
        $role = $user->role;
    }else{
        $role = 9; // 9 for Permisions denied
    }
    //dd($role);
    return $role;
}

?>
