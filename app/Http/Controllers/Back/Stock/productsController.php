<?php

namespace App\Http\Controllers\Back\Stock;

use App\Models\Back\Config\users;
use App\Models\Back\Stock\products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Response;
class productsController extends Controller
{
    public function list(){
        $user=users::find(Auth::id());
        $list=$user->products()->get();
        View::share('liste',$list);
        return view('muhasebe.hizmetveurunler');
    }
    public function autoComplete(Request $request){
        $user=users::find(Auth::id());
        $products=$user->products()->where('name','like','%'.$request->get('term').'%')->get();

        foreach ($products as $query)
        {
            $results[] = ['id' => $query->id, 'value' => $query->name,'salePrice'=>$query->salePrice,'valuAddedTax'=>$query->valuAddedTax];
        }
        return response()->json($results);
    }
    public function filter(Request $request){
        $user=users::find(Auth::id());
        $query=$user->products();

        if ($request->get('arama')){
            $query->where("name", "like", '%' . $request->get('arama') . '%');
        }

        $result= $query->get();
        return Response::json($result);
    }
}
