<?php

namespace App\Http\Controllers\Back\Stock;

use App\Models\Back\Stock\products;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Support\Facades\Input;
use Validator;
class productsAddController extends Controller
{
    public function add_get(){
        $urun = new products();
        View::share('urun',$urun);
        return view('muhasebe.hizmetveurunekle');
    }
    public function add_post(){
        $validator = Validator::make(Input::all(),[
            'name' => 'required',
            'tracking' => 'required',
            'amount' => 'required',
            'salePrice' => 'required',
            'purchasePrice' => 'required',
            'valuAddedTax' => 'required',







        ]);
        if ($validator->fails()){
            return redirect('panel/stok/hizmetveurunekle')->withErrors($validator)->withInput();

        }
        $urun = new products();
        $urun ->fill(Input::all());
        $urun->users_id=Auth::id();
        $urun->save();
        return redirect('panel/stok/hizmetveurunler')->with('status','Hizmet/Ürün Başarıyla Eklendi!');
    }
}
