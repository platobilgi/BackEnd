<?php

namespace App\Http\Controllers\Back\Stock;

use App\Models\Back\Config\cities;
use App\Models\Back\Config\states;
use App\Models\Back\Config\users;
use App\Models\Back\Stock\products;
use App\Models\Back\Stock\stocks;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Support\Facades\Input;
use Validator;
class stocksAddOutController extends Controller
{
    public function add_get(){
        $stock=new stocks();
        $cities=cities::all();
        $states =states::orderBy('name')->get();
        View::share('cities',$cities);
        View::share('states',$states);
        View::share('stock',$stock);
        return view('muhasebe.stokcikis');
    }
    public function add_post(){
        $validator = Validator::make(Input::all(),[
            'description' => 'required',
            'cities_id' => 'required',
            'states_id' => 'required',
            'dateOfIssue' => 'required',
            'shipmentDate' => 'required',
            'products_id' => 'required',
            'amount' => 'required',






        ]);
        if ($validator->fails()){
            return redirect('panel/stok/stok-cikis')->withErrors($validator)->withInput();

        }
        $stock = new stocks();
        $stock->fill(Input::all());
        $stock->users_id=Auth::id();
        $stock->types_id=10;
        $product=products::find(Input::get('products_id'));
        $product->amount=$product->amount-Input::get('amount');
        $product->save();
        $stock->save();
        return redirect('panel/stok/stokhareketleri')->with('status','Stok Çıkışı Başarıyla Eklendi!');
    }
}
