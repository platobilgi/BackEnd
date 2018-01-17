<?php

namespace App\Http\Controllers\Back\Sales;

use App\Models\Back\Config\users;
use App\Models\Back\Sales\customers;
use App\Models\Back\Sales\invoices;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
class customersDetailController extends Controller
{
    public function show($id){
        if ((users::find(Auth::id())->customers()->find($id))){
            $musteri=customers::find($id);
            $invoices=invoices::where('customers_id',$id);
            View::share('musteri',$musteri);
            View::share('fatura',$invoices);
            return view('muhasebe.musteriDetay');

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
