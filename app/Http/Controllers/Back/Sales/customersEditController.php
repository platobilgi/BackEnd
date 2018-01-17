<?php

namespace App\Http\Controllers\Back\Sales;

use App\Models\Back\Config\cities;
use App\Models\Back\Config\states;
use App\Models\Back\Config\users;
use App\Models\Back\Sales\customers;
use App\Models\Back\Sales\customersManagers;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Support\Facades\Input;
use Validator;
class customersEditController extends Controller
{
    public function edit_get($id){
        if ((users::find(Auth::id())->customers()->find($id))){
            $musteri = customers::find($id);
            $cities=cities::all();
            $states=states::all();
            $manager= customersManagers::where('customers_id',$musteri->id)->first();
            View::share('musteri',$musteri);
            View::share('cities',$cities);
            View::share('states',$states);
            View::share('manager',$manager);


            return view('muhasebe.musteriDuzenle');

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
            'cities_id' => 'required',
            'states_id' => 'required',
            'types_id' => 'required',
            'balance' => 'required',




        ]);
        if ($validator->fails()){
            return redirect('panel/satislar/musteri-duzenle/'.$id)->withErrors($validator)->withInput();

        }
        if ((users::find(Auth::id())->customers()->find($id))){
            $musteri = customers::find($id);
            $musteri->fill(Input::all());
            $musteri->save();
            $manager=customersManagers::where('customers_id',$musteri->id)->first();
            $manager->name=Input::get('manager_name');
            $manager->email=Input::get('manager_email');
            $manager->phone_number=Input::get('manager_phone');
            $manager->notes=Input::get('manager_notes');
            $manager->customers_id=$musteri->id;
            $manager->save();
            return redirect('panel/musteriler')->with('status','Müşteri Başarıyla Düzenlendi!');

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
