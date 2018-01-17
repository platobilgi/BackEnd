<?php

namespace App\Http\Controllers\Back\Cash;

use App\Models\Back\Cash\banks;
use App\Models\Back\Config\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Auth;
class banksController extends Controller
{
    public function list(){
        $user=users::find(Auth::id());
        $banks=$user->banks;
        View::share('liste',$banks);
        return view('muhasebe.kasavebankalar');
    }
}
