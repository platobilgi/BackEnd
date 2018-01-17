<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\users;
use App\Models\Back\Expenses\expenses;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class expensesBankDeleteController extends Controller
{
    public function delete($id){
        if ((users::find(Auth::id())->expenses()->find($id))){
            users::find(Auth::id())->expenses()->find($id)->delete();
            return redirect('panel/giderler')->with('status','Banka Gideri Başarıyla Silindi!');

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
        //expenses::find($id)->delete();
    }
}
