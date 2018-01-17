<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\cities;
use App\Models\Back\Config\states;
use App\Models\Back\Config\users;
use App\Models\Back\Expenses\suppliers;
use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Auth;
use Illuminate\Support\Facades\Input;

class suppliersController extends Controller
{
    public function list(){
        $list = suppliers::where('users_id',Auth::user()->id)->get();
        View::share('liste',$list);
        return view('muhasebe.tedarikciler');
    }
    public function filter(Request $request){
        $users = users::find(Auth::id());
        $query = $users->suppliers();

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
