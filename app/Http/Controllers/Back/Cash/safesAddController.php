<?php

namespace App\Http\Controllers\Back\Cash;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Back\Cash\banks;
use View;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;
class safesAddController extends Controller
{
    public function add_get(){
        $banka=new banks();
        View::share('kasa',$banka);
        return view('muhasebe.kasaEkle');
    }
    public function add_post(){
        $validator=Validator::make(Input::all(),[
            'description' => 'required',
            'balance' => 'required|min:0|',
        ]);
        if ($validator->fails()){
            return redirect('panel/nakit/kasa-ekle')->withErrors($validator)->withInput();
        }
        $banka=new banks();
        $banka->fill(Input::all());
        $banka->users_id=Auth::id();
        $banka->types_id=11;
        $banka->save();
        return redirect('panel/kasavebankalar')->with('status','Kasa Hesabı Başarıyla Eklendi!');
    }
}
