<?php

namespace App\Http\Controllers\Back\Sales;

use App\Models\Back\Config\users;
use App\Models\Back\Sales\customers;
use App\Models\Back\Sales\invoices;
use App\Models\Back\Sales\invoicesContents;
use App\Models\Back\Sales\payments;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
class invoicesDetailController extends Controller
{
    public function show($id){
        if ((users::find(Auth::id())->invoices()->find($id))){
            $invoices=invoices::find($id);
            $customer=customers::find($invoices->customers_id);
            $contents=invoicesContents::where('invoices_id',$invoices->id)->get();
            $banks=users::find(Auth::id())->banks()->get();
            View::share('gider',$invoices);
            View::share('banks',$banks);
            View::share('contents',$contents);
            $payment=new payments();
            View::share('payment',$payment);


            return view('muhasebe.faturaDetay');

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
