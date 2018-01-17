<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class workersDeleteController extends Controller
{
    public function delete($id){
        if ((users::find(Auth::id())->workers()->find($id))){
            users::find(Auth::id())->workers()->find($id)->delete();
            return redirect('panel/calisanlar')->with('status','Silme İşlemi Başarılı');

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
