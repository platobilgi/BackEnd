<?php

namespace App\Http\Controllers\Back\Stock;

use App\Models\Back\Config\users;
use App\Models\Back\Stock\products;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Support\Facades\Input;
use Validator;
class productsEditController extends Controller
{
    public function edit_get($id){
        if ((users::find(Auth::id())->products()->find($id))){
            $urun = products::find($id);
            View::share('urun',$urun);
            return view('muhasebe.hizmetveurunduzenle');

        }
        else{

            $user=users::find(Auth::id());
            if((($user->warn)%10)==0){
                $user->is_active=0;
                $user->ban_date=Carbon::now();
            }
            $user->warn=users::find(Auth::id())->warn+1;
            $user->save();
            return response()->view('muhasebe.404', [], 404);


        }




    }
    public function edit_post($id){
        $validator = Validator::make(Input::all(),[
            'name' => 'required',
            'tracking' => 'required',
            'amount' => 'required',
            'salePrice' => 'required',
            'purchasePrice' => 'required',
            'valueAddedTax' => 'required',






        ]);
        if ($validator->fails()){
            return redirect('panel/stok/urun-duzenle/'.$id)->withErrors($validator)->withInput();

        }
        if ((users::find(Auth::id())->products()->find($id))){
            $yeni=products::find($id);
            $yeni->fill(Input::all());
            $yeni->save();
            return redirect('panel/stok/hizmetveurunler')->with('status','Hizmet/Ürün Başarıyla Eklendi!');

        }
        else{

            $user=users::find(Auth::id());
            if((($user->warn)%10)==0){
                $user->is_active=0;
                $user->ban_date=Carbon::now();
            }
            $user->warn=users::find(Auth::id())->warn+1;
            $user->save();
            return response()->view('muhasebe.404', [], 404);


        }




    }
}
