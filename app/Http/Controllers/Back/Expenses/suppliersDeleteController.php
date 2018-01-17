<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;

class suppliersDeleteController extends Controller
{
    public function delete($id){
        if ((users::find(Auth::id())->suppliers()->find($id))){

            $user= users::find(Auth::id());
            $user->suppliers()->find($id)->delete();
            return redirect("panel/tedarikciler")->with('status',"Tedarikçi Başarıyla Silindi");

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
