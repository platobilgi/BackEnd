<?php

namespace App\Http\Controllers\Back\Stock;

use App\Models\Back\Config\cities;
use App\Models\Back\Config\states;
use App\Models\Back\Config\users;
use App\Models\Back\Expenses\suppliers;
use App\Models\Back\Sales\customers;
use App\Models\Back\Stock\products;
use App\Models\Back\Stock\stocks;
use Auth;
use Carbon\Carbon;
use View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class stocksEditOutController extends Controller
{
    public function edit_get($id){
        if ((users::find(Auth::id())->stocks()->find($id))){
            $stok=stocks::find($id);
            $customer=customers::find($stok->customers_id);
            $cities=cities::all();
            $states=states::all();
            $product=products::find($stok->products_id);
            View::share('stok',$stok);
            View::share('musteri',$customer);
            View::share('cities',$cities);
            View::share('states',$states);
            View::share('product',$product);
            return view('muhasebe.stokCikisDuzenle');

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
            'description' => 'required',
            'cities_id' => 'required',
            'states_id' => 'required',
            'dateOfIssue' => 'required',
            'shipmentDate' => 'required',
            'products_id' => 'required',
            'amount' => 'required',






        ]);
        if ($validator->fails()){
            return redirect('panel/stok/stokcikis-duzenle/'.$id)->withErrors($validator)->withInput();

        }
        if ((users::find(Auth::id())->stocks()->find($id))){
            $stok=stocks::find($id);
            $stok->fill(Input::all());
            $stok->save();
            return redirect('panel/stok/stokhareketleri')->with('status','Stok Çıkışı Başarıyla Düzenlendi!');

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
