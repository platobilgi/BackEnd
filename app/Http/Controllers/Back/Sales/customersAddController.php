<?php

namespace App\Http\Controllers\Back\Sales;

use App\Models\Back\Config\cities;
use App\Models\Back\Config\states;
use App\Models\Back\Config\users;
use App\Models\Back\Sales\customers;
use App\Models\Back\Sales\customersManagers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;
class customersAddController extends Controller
{
    public function add_get(){
        $cities=cities::all();
        $states=states::all();
        $customer=new customers();
        View::share('cities',$cities);
        View::share('states',$states);
        View::share('customer',$customer);

        return view('muhasebe.musteriEkle');

    }
    public function add_post(){
        $validator = Validator::make(Input::all(),[
            'name' => 'required',
            'cities_id' => 'required',
            'states_id' => 'required',
            'types_id' => 'required',
            'balance' => 'required',




        ]);
        if ($validator->fails()){
            return redirect('panel/satislar/musteri-ekle')->withErrors($validator)->withInput();

        }
        $user=users::find(Auth::id());
        $customer=new customers();
        $customer->fill(Input::all());
        $customer->users_id=$user->id;
        $customer->save();
        $customers_manager=new customersManagers();
        $customers_manager->name=Input::get('manager_name');
        $customers_manager->email=Input::get('manager_email');
        $customers_manager->phone_number=Input::get('manager_phone');
        $customers_manager->notes=Input::get('manager_notes');
        $customers_manager->customers_id=$customer->id;
        $customers_manager->save();
        return redirect('panel/musteriler')->with('status','Müşteri Başarıyla Eklendi');


    }
}
