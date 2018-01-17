<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Carbon\Carbon;

class suppliersDetailController extends Controller
{
    public function show($id){
        if ((users::find(Auth::id())->suppliers()->find($id))){

            $user=users::find(Auth::id());
            $detay=$user->suppliers()->find($id);
            View::share('detay',$detay);
            return view('muhasebe.tedarikciDetay');

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
