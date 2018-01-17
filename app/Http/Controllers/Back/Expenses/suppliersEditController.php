<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\cities;
use App\Models\Back\Config\states;
use App\Models\Back\Config\users;
use App\Models\Back\Expenses\suppliers;
use App\Models\Back\Expenses\suppliersManagers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Illuminate\Support\Facades\Input;
use Validator;
class suppliersEditController extends Controller
{
    public function edit_get($id){
        if ((users::find(Auth::id())->suppliers()->find($id))){

            $users=users::find(Auth::id());
            $tedarikci=$users->suppliers->where('id',$id)->first();
            $cities=cities::all();
            $states =states::orderBy('name')->get();
            $manager_id=$tedarikci->id;
            $manager=suppliersManagers::where('suppliers_id',$manager_id)->first();
            View::share('manager',$manager);
            View::share('cities',$cities);
            View::share('states',$states);
            View::share('tedarikci',$tedarikci);
            return view('muhasebe.tedarikciDuzenle');

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
            'balance' => 'required|min:0',


        ]);
        if ($validator->fails()){
            return redirect('panel/giderler/tedarikci-duzenle/'.$id)->withErrors($validator)->withInput();

        }
        if ((users::find(Auth::id())->suppliers()->find($id))){
            $suppliers = suppliers::findOrFail($id);
            $suppliers->fill(Input::all());
            $suppliers->save();
            $manager= suppliersManagers::find(Input::get('manager_id'));
            $manager->name=Input::get('manager_name');
            $manager->email=Input::get('manager_email');
            $manager->phone_number=Input::get('manager_phone_number');
            $manager->notes=Input::get('manager_notes');
            $manager->suppliers_id=$suppliers->id;
            $manager->save();
            return redirect('panel/tedarikciler')->with('status','Tedarikçi Başarıyla Düzenlendi.');

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
