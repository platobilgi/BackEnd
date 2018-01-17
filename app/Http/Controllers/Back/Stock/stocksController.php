<?php

namespace App\Http\Controllers\Back\Stock;

use App\Models\Back\Config\users;
use App\Models\Back\Stock\stocks;
use Auth;
use View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
class stocksController extends Controller
{
    public function list(){
        $user=users::find(Auth::id());
        $gelen=$user->stocks;
        View::share('gelen',$gelen);
        return view('muhasebe.stokhareketleri');
    }
    public function filter(Request $request){
        $user=users::find(Auth::id());
        $query=$user->stocks();

        if ($request->get('arama')){
            $query->where("description", "like", '%' . $request->get('arama') . '%');
        }
        if ($request->get('fatdur')){
            $query->where("name", "like", '%' . $request->get('arama') . '%');
        }
        if ($request->get('yon')){
            $query->where("types_id", $request->get('yon'));
        }
        if ($request->get('duztar')){
            $query->where("dateOfIssue", $request->get('duztar'));
        }
        $result= $query->get();
        return Response::json($result);
    }
}
