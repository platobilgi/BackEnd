<?php

namespace App\Http\Controllers\Back\Cash;

use App\Models\Back\Cash\banks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;
class banksAddController extends Controller
{
    public function add_get(){
        $banka=new banks();
        View::share('banka',$banka);
        return view('muhasebe.bankaEkle');
    }
    public function add_post(){
        $validator=Validator::make(Input::all(),[
            'description' => 'required',
            'balance' => 'required|min:0|',
        ]);
        if ($validator->fails()){
            return redirect('panel/nakit/banka-ekle')->withErrors($validator)->withInput();
        }
        $banka=new banks();
        $banka->fill(Input::all());
        $banka->users_id=Auth::id();
        $banka->types_id=12;
        $banka->currency_id=1;
        $banka->save();

        return redirect('panel/kasavebankalar')->with('status','Banka Hesabı Başarıyla Eklendi!');
    }
}
