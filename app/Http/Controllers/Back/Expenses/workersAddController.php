<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\users;
use App\Models\Back\Expenses\workers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Illuminate\Support\Facades\Input;
use Validator;
class workersAddController extends Controller
{
    public function add_get(){
        $worker = new workers();
        View::share('worker',$worker);
        return view('muhasebe.calisanEkle');

    }
    public function add_post(workers $worker){
        $validator = Validator::make(Input::all(),[
            'name' => 'required',
            'balance' => 'required|min:0',


        ]);
        if ($validator->fails()){
            return redirect('panel/giderler/calisan-ekle')->withErrors($validator)->withInput();

        }
        $users=users::find(Auth::id());
        $users->workers()->save($worker->fill(Input::all()));
        return redirect('panel/calisanlar')->with('status','Çalışan Başarıyla Eklendi.');
    }
}
