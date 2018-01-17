<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\users;
use App\Models\Back\Expenses\expenses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;
class expensesBankAddController extends Controller
{
    public function add_get(){
        $banka = new expenses();
        View::share('banka',$banka);
        return view('muhasebe.bankaGideriEkle');

    }
    public function add_post(){
        $validator = Validator::make(Input::all(),[
            'description' => 'required',
            'issue_date' =>'required|date',
            'fee' => 'required|min:0',
            'types_id' => 'required'


        ]);
        if ($validator->fails()){
            return redirect('panel/giderler/bankagider-ekle')->withErrors($validator)->withInput();

        }
        $user = users::find(Auth::id());
        $expense = new expenses();
        $expense->fill(Input::all());
        $expense->users_id=$user->id;
        $expense->save();
        return redirect('panel/giderler')->with('status','Banka Gideri Başarıyla Eklendi!');


    }
}
