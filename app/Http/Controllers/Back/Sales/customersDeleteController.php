<?php

namespace App\Http\Controllers\Back\Sales;

use App\Models\Back\Config\users;
use App\Models\Back\Sales\customers;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class customersDeleteController extends Controller
{
    public function delete($id){
        if ((users::find(Auth::id())->customers()->find($id))){
            customers::find($id)->delete();
            return redirect('panel/musteriler')->with('status','Müşteri Başarıyla Silindi');

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
