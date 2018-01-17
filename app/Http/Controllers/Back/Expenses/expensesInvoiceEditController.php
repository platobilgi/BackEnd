<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\users;
use App\Models\Back\Expenses\expenses;
use App\Models\Back\Expenses\suppliers;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Support\Facades\Input;
use Validator;
class expensesInvoiceEditController extends Controller
{
    public function edit_get($id){
        if ((users::find(Auth::id())->expenses()->find($id))){
            $gider=expenses::find($id);
            $supplier=suppliers::find($gider->suppliers_id);
            View::share('gider',$gider);
            View::share('supplier',$supplier);

            return view('muhasebe.fisFaturaDuzenle');

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
            'types_id' => 'required',
            'supplier' => 'required'


        ]);
        if ($validator->fails()){
            return redirect('panel/giderler/fisfatura-duzenle/'.$id)->withErrors($validator)->withInput();

        }
        if ((users::find(Auth::id())->expenses()->find($id))){
            $gider=expenses::find($id);
            $gider->fill(Input::all());
            $gider->save();
            return redirect('panel/giderler')->with('status','Gider Faturası Başarıyla Düzenlendi');

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
