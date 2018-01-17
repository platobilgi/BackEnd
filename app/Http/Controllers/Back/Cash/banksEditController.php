<?php

namespace App\Http\Controllers\Back\Cash;

use App\Models\Back\Cash\banks;
use App\Models\Back\Config\users;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Support\Facades\Input;
use Validator;
class banksEditController extends Controller
{
    public function edit_get($id){
        if ((users::find(Auth::id())->banks()->find($id))){
            $banka=banks::find($id);
            View::share('banka',$banka);
            return view('muhasebe.bankaDuzenle');

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
            return redirect('panel/nakit/banka-duzenle/'.$id)->withErrors($validator)->withInput();
        }
        if ((users::find(Auth::id())->banks()->find($id))){
            $banka=banks::find($id);
            $banka->fill(Input::all());
            $banka->save();
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
