<?php

namespace App\Http\Controllers\Back\Cash;

use App\Models\Back\Config\users;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Back\Cash\banks;
use View;
use Illuminate\Support\Facades\Input;
use Validator;
class safesEditController extends Controller
{
    public function edit_get($id){
        if ((users::find(Auth::id())->banks()->find($id))){
            $safe=banks::find($id);
            View::share('kasa',$safe);
            return view('muhasebe.kasaDuzenle');

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
        $validator=Validator::make(Input::all(),[
            'description' => 'required',
            'balance' => 'required|min:0|',
        ]);
        if ($validator->fails()){
            return redirect('panel/nakit/kasa-duzenle/'.$id)->withErrors($validator)->withInput();
        }
        if ((users::find(Auth::id())->banks()->find($id))){
            $kasa=banks::find($id);
            $kasa->fill(Input::all());
            $kasa->save();
            return redirect('panel/kasavebankalar')->with('status','Banka Başarıyla Düzenlendi!');

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
