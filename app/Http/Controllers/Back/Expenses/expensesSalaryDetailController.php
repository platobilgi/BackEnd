<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Cash\banks;
use App\Models\Back\Config\users;
use App\Models\Back\Expenses\expenses;
use App\Models\Back\Expenses\workers;
use App\Models\Back\Sales\payments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class expensesSalaryDetailController extends Controller
{
    public function detail($id){

        if ((users::find(Auth::id())->expenses()->find($id))){
            $gider=users::find(Auth::id())->expenses()->find($id);
            View::share('gider',$gider);
            $payment=new payments();
            View::share('payment',$payment);
            $banka=users::find(Auth::id())->banks()->get();
            View::share('banks',$banka);
            return view('muhasebe.maasPrimDetay');

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
    public function add_payment($id){
        $payment=new payments();
        $expenses= expenses::find($id);
        $bank=banks::find(Input::get('banks_id'));
        $workers=workers::find($expenses->workers_id);
        $workers->balance=$workers->balance+Input::get('odeme');
        $bank->balance=$bank->balance-Input::get('odeme');
        $bank->save();
        $workers->save();
        $payment->types_id=15;
        $payment->balance=Input::get('odeme');
        $payment->users_id=Auth::id();
        $payment->workers_id=$expenses->workers_id;
        $payment->issue_date=Carbon::now();
        $payment->banks_id=Input::get('banks_id');
        $payment->expenses_id=$id;
        $expenses->paid=Input::get('odeme');
        $expenses->save();
        $payment->save();



        return redirect('panel');

    }
}
