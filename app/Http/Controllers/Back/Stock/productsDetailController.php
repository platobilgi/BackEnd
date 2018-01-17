<?php

namespace App\Http\Controllers\Back\Stock;

use App\Models\Back\Config\users;
use App\Models\Back\Stock\products;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
class productsDetailController extends Controller
{
    public function detail($id){
        if ((users::find(Auth::id())->products()->find($id))){
            $urundetay=products::find($id);
            View::share('urundetay',$urundetay);
            return view('muhasebe.urunDetay');

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
