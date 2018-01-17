<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Auth;
class workersDetailController extends Controller
{
    public function get_detail($id){
        if ((users::find(Auth::id())->workers()->find($id))){
            $user=users::find(Auth::id());
            $detay=$user->workers->where('id',$id)->first();
            return View::make('muhasebe.calisanDetay',compact('detay'));

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
