<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Cash\banks;
use App\Models\Back\Config\users;
use App\Models\Back\Expenses\expenses;
use App\Models\Back\Sales\payments;
use Auth;
use Carbon\Carbon;
use View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class expensesInvoiceDetailController extends Controller
{
    public function detail($id){
        if ((users::find(Auth::id())->expenses()->find($id))){
            $gider=users::find(Auth::id())->expenses()->find($id)->first();
            $payment=new payments();
            View::share('payment',$payment);

            $banka=users::find(Auth::id())->banks()->get();
            View::share('banks',$banka);
            View::share('gider',$gider);
            return view('muhasebe.fisFaturaDetay');


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
