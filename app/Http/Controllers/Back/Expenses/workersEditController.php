<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Expenses\workers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Support\Facades\Input;
use App\Models\Back\Config\users;
use Auth;
use Validator;
class workersEditController extends Controller
{
    public function edit_get($id){
        if ((users::find(Auth::id())->workers()->find($id))){
            $users=users::find(Auth::id());
            $calisan=$users->workers->where('id',$id)->first();
            return View::make('muhasebe.calisanDuzenle',compact('calisan'));

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
            return redirect('panel/giderler/calisan-duzenle/'.$id)->withErrors($validator)->withInput();

        }
        if ((users::find(Auth::id())->workers()->find($id))){
            $worker = workers::findOrFail($id);
            $worker->fill(Input::all());
            $worker->save();
            return redirect('panel/calisanlar')->with('status','Çalışan Başarıyla Düzenlendi.');

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
