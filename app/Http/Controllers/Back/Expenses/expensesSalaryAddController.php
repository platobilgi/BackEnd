<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\users;
use App\Models\Back\Expenses\expenses;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Support\Facades\Input;
use Validator;
class expensesSalaryAddController extends Controller
{
    public function add_get(){
        $gider=new expenses();
        View::share('gider',$gider);
        return view('muhasebe.maasPrimEkle');
    }
    public function add_post(){
        $validator = Validator::make(Input::all(),[
            'description' => 'required',
            'issue_date' =>'required|date',
            'fee' => 'required|min:0',
            'types_id' => 'required',
            'workers_id' => 'required'


        ]);
        if ($validator->fails()){
            return redirect('panel/giderler/maasprim-ekle')->withErrors($validator)->withInput();

        }
        $gider=new expenses();
        $gider->fill(Input::all());
        $gider->status_id=4;
        $gider->users_id=Auth::id();
        $gider->save();
        return redirect('panel/giderler')->with('status','Maaş Gideri Başarıyla Eklendi');

    }
    public function autoComplete(Request $request){
        $user=users::find(Auth::id());
        $workers=$user->workers()->where('name','like','%'.$request->get('term').'%')->get();

        foreach ($workers as $query)
        {
            $results[] = ['id' => $query->id, 'value' => $query->name];
        }
        return response()->json($results);
    }
}
