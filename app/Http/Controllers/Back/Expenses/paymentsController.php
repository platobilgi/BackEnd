<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Cash\banks;
use App\Models\Back\Expenses\expenses;
use App\Models\Back\Expenses\suppliers;
use App\Models\Back\Sales\payments;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class paymentsController extends Controller
{
    public function add($id){
        $payment=new payments();
        $expenses= expenses::find($id);
        $bank=banks::find(Input::get('banks_id'));
        $suppliers=suppliers::find($expenses->suppliers_id);
        $suppliers->balance=$suppliers->balance+Input::get('odeme');
        $bank->balance=$bank->balance-Input::get('odeme');
        $bank->save();
        $suppliers->save();
        $payment->types_id=15;
        $payment->balance=Input::get('odeme');
        $payment->users_id=Auth::id();
        $payment->suppliers_id=$expenses->suppliers_id;
        $payment->issue_date=Carbon::now();
        $payment->banks_id=Input::get('banks_id');
        $payment->expenses_id=$id;
        $payment->save();



        return redirect('panel');
    }
}
