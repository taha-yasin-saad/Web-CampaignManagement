<?

use App\Workplace;
use App\User;
use App\WorkplaceUser;
use Illuminate\Support\Facades\Auth;

function get_workplaces(){
    $workplaces = WorkplaceUser::with('workplace')->where('user_id',Auth::user()->id)->get();
    return $workplaces;
}
function get_role($workplace_id){
    $role = WorkplaceUser::where('user_id',Auth::user()->id)->where('workplace_id',$workplace_id)->first()->role;
    return $role;
}