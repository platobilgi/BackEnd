<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\cities;
use App\Models\Back\Config\states;
use App\Models\Back\Expenses\suppliers;
use App\Models\Back\Expenses\suppliersManagers;
use View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
class suppliersAddController extends Controller
{
    public function add_get(){
        $suppliers = new suppliers();
        $cities=cities::all();
        $states =states::orderBy('name')->get();

        View::share('suppliers',$suppliers);
        View::share('cities',$cities);
        View::share('states',$states);

        return view('muhasebe.tedarikciEkle');
    }
    public function add_post(suppliers $supplier){
        $validator = Validator::make(Input::all(),[
            'name' => 'required',
            'balance' => 'required|min:0',


        ]);
        if ($validator->fails()){
            return redirect('panel/giderler/tedarikci-ekle')->withErrors($validator)->withInput();

        }
        $supp=new suppliers();
        $supp->fill(Input::all());
        $supp->save();
        $manager= new suppliersManagers();
        $manager->name=Input::get('manager_name');
        $manager->email=Input::get('manager_email');
        $manager->phone_number=Input::get('manager_phone_number');
        $manager->notes=Input::get('manager_notes');
        $manager->suppliers_id=$supp->id;
        $manager->save();





        return redirect('panel/tedarikciler')->with('status','Tedarikçi Başarıyla Eklendi.');

    }
}
