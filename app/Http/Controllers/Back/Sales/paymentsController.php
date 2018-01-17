<?php

namespace App\Http\Controllers\Back\Sales;

use App\Models\Back\Cash\banks;
use App\Models\Back\Sales\customers;
use App\Models\Back\Sales\invoices;
use App\Models\Back\Sales\payments;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Input;

class paymentsController extends Controller
{
    public function add($id){
        $invoice= invoices::find($id);
        $customer=customers::find($invoice->customers_id);
        $bank=banks::find(Input::get('banks_id'));
        $payment=new payments();
        $payment->invoices_id=$id;
        $payment->users_id=Auth::id();
        $payment->customers_id=$invoice->customers_id;
        $payment->types_id=14;
        $payment->balance=Input::get('odeme');
        $payment->issue_date=Carbon::now();
        $payment->banks_id=Input::get('banks_id');
        $customer->balance=$customer->balance+$payment->balance;
        $payment->save();
        $bank->balance=$bank->balance+Input::get('odeme');
        $bank->save();
        $invoice->paid=$invoice->paid+Input::get('odeme');
        $invoice->save();
        $customer->save();

        return redirect('panel');

    }
}
