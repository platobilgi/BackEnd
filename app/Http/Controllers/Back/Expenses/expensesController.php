<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\users;
use App\Models\Back\Expenses\expenses;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Response;
use DB;
class expensesController extends Controller
{
    public function list(){
        $user = users::find(Auth::id());
        $expenses = $user->expenses;
        View::share('liste',$expenses);
        return view('muhasebe.giderler');
    }
    public function filtre(Request $request){
        $user=users::find(Auth::id());
        $query=$user->expenses();
        if ($request->get('gidertur')) {
            $query->where('status_id','=',$request->get('gidertur'));
        }
        if ($request->get('odedur')==1) {
            $query->whereDate('expiry_date','<',Carbon::now());
        }
        if ($request->get('odedur')==2) {
            $query->whereDate('expiry_date','>=',Carbon::now());
        }
        if ($request->get('odedur')==3) {
            $query->where('expiry_date','=',null);
        }
        if ($request->get('odedur')==4) {
            $query->where('types_id',3);
        }
        if ($request->get('arama')){
            $query->where("description", "like", '%' . $request->get('arama') . '%');
        }
        if ($request->get('duztar')) {
            $query->whereDate('issue_date','=',$request->get('duztar'));
        }
        if ($request->get('vadtar')) {
            $query->whereDate('expiry_date','=',$request->get('vadtar'));
        }
        $result= $query->get();
        return Response::json($result);
    }
}
