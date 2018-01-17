<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\users;
use App\Models\Back\Expenses\workers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Response;
class workersController extends Controller
{
    public function list(){
        $workers=workers::where('users_id',Auth::user()->id)->get();
        View::share('calisanlar',$workers);
        return view('muhasebe.calisanlar');
    }
    public function filter(Request $request){
        $users = users::find(Auth::id());
        $query = $users->workers();

        if ($request->get('arama')){
            $query->where("name", "like", '%' . $request->get('arama') . '%');

        }
        if ($request->get('bakdur')==1){
            $query->where("balance", ">","0");

        }
        else if ($request->get('bakdur')==2){
            $query->where("balance", "=","0");


        }
        $result = $query->get();

        return Response::json($result);


    }
}
