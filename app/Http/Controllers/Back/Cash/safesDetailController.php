<?php

namespace App\Http\Controllers\Back\Cash;

use App\Models\Back\Cash\banks;
use App\Models\Back\Config\users;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
class safesDetailController extends Controller
{
    public function show($id){
        if ((users::find(Auth::id())->banks()->find($id))){
            $kasa = banks::find($id);
            View::share('kasa',$kasa);
            return view('muhasebe.kasaDetay');

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
