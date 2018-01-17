<?php

namespace App\Http\Controllers\Back\Stock;

use App\Models\Back\Config\users;
use App\Models\Back\Stock\products;
use App\Models\Back\Stock\stocks;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
class stocksDetailInController extends Controller
{
    public function show($id){
        if ((users::find(Auth::id())->stocks()->find($id))){
            $stock = stocks::find($id);
            $product=products::find($stock->products_id);
            View::share('urun',$product);
            View::share('stok',$stock);
            return view('muhasebe.stokInDetay');

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
