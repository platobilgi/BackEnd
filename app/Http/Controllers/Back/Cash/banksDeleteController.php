<?php

namespace App\Http\Controllers\Back\Cash;

use App\Models\Back\Config\users;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Back\Cash\banks;
class banksDeleteController extends Controller
{
    public function delete($id){
        if ((users::find(Auth::id())->banks()->find($id))){
            banks::find($id)->delete();
            return redirect('panel/kasavebankalar')->with('status','Banka Başarıyla Silindi!');

        }
        else{

            $user=users::find(Auth::id());
            if((($user->warn)%10)==0){
                $user->is_active=0;
                $user->ban_date=Carbon::now();
            }
            $user->warn=users::find(Auth::id())->warn+1;
            $user->save();
            return response()->view('muhasebe.404', [], 404);


        }



    }
}
