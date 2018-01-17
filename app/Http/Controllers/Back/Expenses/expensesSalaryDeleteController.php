<?php

namespace App\Http\Controllers\Back\Expenses;

use App\Models\Back\Config\users;
use App\Models\Back\Expenses\expenses;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;


class expensesSalaryDeleteController extends Controller
{
    public function delete($id){
        if ((users::find(Auth::id())->expenses()->find($id))){
            users::find(Auth::id())->expenses()->find($id)->delete();
            return redirect('panel/giderler')->with('status','Maaş Gideri Başarıyla Silindi!');

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
