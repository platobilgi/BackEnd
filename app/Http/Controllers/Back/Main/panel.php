<?php

namespace App\Http\Controllers\Back\Main;

use App\Models\Back\Config\users;
use App\Models\Back\Sales\invoices;
use App\Models\Back\Sales\payments;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;

class panel extends Controller
{
    public function index(){
        $user=users::find(Auth::id());
        $payments=$user->payments()->get();
        View::share('payments',$payments);
        return view('muhasebe.index');
    }

}
