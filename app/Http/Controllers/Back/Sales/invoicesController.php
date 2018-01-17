<?php

namespace App\Http\Controllers\Back\Sales;
use App\Models\Back\Config\users;
use App\Models\Back\Sales\invoices;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use DB;
use Response;
class invoicesController extends Controller
{
    public function list(){
        $faturalar =invoices::where('users_id',Auth::id())->get();
        View::share('faturalar',$faturalar);
        return view('muhasebe.faturalar');
    }
    public function filter(Request $request){
        $user=users::find(Auth::id());
        $query=$user->invoices();
        if ($request->get('yazdur')) {
            $query->where('yaz_id','=',$request->get('yazdur'));
        }
        if ($request->get('paydur')) {
            $query->where('pay_id','=',$request->get('paydur'));
        }
        if ($request->get('paydur')) {
            $query->where('pay_id','=',$request->get('paydur'));
        }
        if ($request->get('tahdur')==1) {
            $query->whereDate('expiryDate','<',Carbon::now());
        }
        if ($request->get('tahdur')==2) {
            $query->whereDate('expiryDate','>=',Carbon::now());
        }
        if ($request->get('tahdur')==3) {
            $query->where('expiryDate','=',null);
        }
        if ($request->get('tahdur')==4) {
            $query->where('status_id',5);
        }
        if ($request->get('arama')){
            $query->where("description", "like", '%' . $request->get('arama') . '%');
        }
        if ($request->get('duztar')) {
            $query->whereDate('dateOfIssue','=',$request->get('duztar'));
        }
        if ($request->get('vadtar')) {
            $query->whereDate('expiryDate','=',$request->get('vadtar'));
        }
        $result= $query->get();
        return Response::json($result);
    }


}
