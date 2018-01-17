<?php

namespace App\Http\Controllers\Back\Sales;

use App\Models\Back\Config\users;
use App\Models\Back\Sales\customers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Response;
class customersController extends Controller
{
    public function list(){
        $user=users::find(Auth::id());
        $customers=$user->customers;
        View::share('musteriler',$customers);
        return view('muhasebe.musteriler');
    }
    public function autoComplete(Request $request){
        $user=users::find(Auth::id());
        $workers=$user->customers()->where('name','like','%'.$request->get('term').'%')->get();

        foreach ($workers as $query)
        {
            $results[] = ['id' => $query->id, 'value' => $query->name];
        }
        return response()->json($results);
    }
    public function filter(Request $request){
        $user=users::find(Auth::id());
        $query=$user->customers();

        if ($request->get('arama')){
            $query->where("name", "like", '%' . $request->get('arama') . '%');
        }
        if ($request->get('bakdur')==2){
            $query->where("balance", "<", 0);
        }
        else if ($request->get('bakdur')==1){
            $query->where("balance", ">",  0);
        }


        $result= $query->get();
        return Response::json($result);

    }
}
