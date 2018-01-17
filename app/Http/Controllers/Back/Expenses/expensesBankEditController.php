<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\users;
use App\Models\Back\Expenses\expenses;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;
class expensesBankEditController extends Controller
{
    public function edit_get($id){


        if ((users::find(Auth::id())->expenses()->find($id))){
            $banka=users::find(Auth::id())->expenses()->find($id)->first();
            View::share('banka',$banka);
            return view('muhasebe.bankaGideriDuzenle');

        }
        else{
            return response()->view('muhasebe.404', [], 404);


        }
    }
    public function edit_post($id){
        $validator = Validator::make(Input::all(),[
            'description' => 'required',
            'issue_date' =>'required|date',
            'fee' => 'required|min:0',
            'types_id' => 'required'


        ]);
        if ($validator->fails()){
            return redirect('panel/giderler/bankagider-duzenle/'.$id)->withErrors($validator)->withInput();

        }


        if ((users::find(Auth::id())->expenses()->find($id))){
            $expense=users::find(Auth::id())->expenses()->find($id);
            $expense->fill(Input::all());
            $expense->save();
            return redirect('panel/giderler')->with('status','Banka Gideri Başarıyla Düzenlendi');

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
