<?

use App\Workplace;
use App\User;
use App\WorkplaceUser;
use Illuminate\Support\Facades\Auth;

function get_workplaces(){
    $workplaces = WorkplaceUser::with('workplace')->where('user_id',Auth::user()->id)->get();
    return $workplaces;
}