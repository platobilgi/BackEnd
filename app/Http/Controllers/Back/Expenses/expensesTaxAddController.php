<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\users;
use App\Models\Back\Expenses\expenses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;
class expensesTaxAddController extends Controller
{
    public function add_get(){
        $gider=new expenses();
        View::share('gider',$gider);
        return view('muhasebe.vergiSgkPrimEkle');

    }
    public function add_post(){
        $validator = Validator::make(Input::all(),[
            'description' => 'required',
            'issue_date' =>'required|date',
            'fee' => 'required|min:0',
            'types_id' => 'required',


        ]);
        if ($validator->fails()){
            return redirect('panel/giderler/vergi-ekle/')->withErrors($validator)->withInput();

        }
        $gider=new expenses();
        $gider->fill(Input::all());
        $gider->users_id=Auth::id();
        $gider->status_id=2;
        $gider->save();
        return redirect('panel/giderler')->with('status','Vergi Gideri Başarıyla Eklendi!');
    }
}
