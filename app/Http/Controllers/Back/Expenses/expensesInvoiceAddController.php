<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\users;
use App\Models\Back\Expenses\expenses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Support\Facades\Input;
use Auth;
use Response;
use Validator;
class expensesInvoiceAddController extends Controller
{
    public function add_get(){
        $fatura = new expenses();
        View::share('fatura',$fatura);
        return view('muhasebe.fisfaturaEkle');
    }
    public function add_post(){
        $validator = Validator::make(Input::all(),[
            'description' => 'required',
            'issue_date' =>'required|date',
            'fee' => 'required|min:0',
            'types_id' => 'required',
            'supplier' => 'required'


        ]);
        if ($validator->fails()){
            return redirect('panel/giderler/fisfatura-ekle')->withErrors($validator)->withInput();

        }

        $fatura = new expenses();
        $fatura->fill(Input::all());
        $fatura->status_id=3;
        $fatura->users_id=Auth::id();
        $fatura->save();
        return redirect('panel/giderler')->with('status','Fatura Gideri Başarıyla Kaydedildi.');
    }
    public function autoComplete(Request $request){
        $user=users::find(Auth::id());
        $suppliers=$user->suppliers()->where('name','like','%'.$request->get('term').'%')->get();

        foreach ($suppliers as $query)
        {
            $results[] = ['id' => $query->id, 'value' => $query->name];
        }
        return response()->json($results);
    }
}
