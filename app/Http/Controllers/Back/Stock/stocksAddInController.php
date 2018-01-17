<?php

namespace App\Http\Controllers\Back\Stock;

use App\Models\Back\Config\cities;
use App\Models\Back\Config\states;
use App\Models\Back\Expenses\expenses;
use App\Models\Back\Stock\products;
use App\Models\Back\Stock\stocks;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Support\Facades\Input;
use Validator;
class stocksAddInController extends Controller
{
    public function add_get(){
        $stok = new stocks();
        $cities=cities::all();
        $states =states::orderBy('name')->get();
        View::share('cities',$cities);
        View::share('states',$states);
        View::share('stok',$stok);
        return view('muhasebe.stokgiris');
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
            return redirect('panel/stok/stok-giris')->withErrors($validator)->withInput();

        }
        $stock = new stocks();
        $stock->fill(Input::all());
        $stock->users_id=Auth::id();
        $stock->types_id=9;
        $product=products::find(Input::get('products_id'));
        $product->amount=$product->amount+Input::get('amount');
        $expense=new expenses();
        $expense->description=Input::get('description');
        $expense->issue_date=Input::get('dateOfIssue');
        $expense->fee=$product->purchasePrice*Input::get('amount');
        $expense->status_id=3;
        $expense->expiry_date=Input::get('shipmentDate');
        $expense->suppliers_id=Input::get('suppliers_id');
        $expense->users_id=Auth::id();
        $expense->save();
        $product->save();

        $stock->save();
        return redirect('panel/stok/stokhareketleri')->with('status','Stok Girişi Başarıyla Eklendi!');

    }
}
