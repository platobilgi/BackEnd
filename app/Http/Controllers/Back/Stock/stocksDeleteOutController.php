<?php

namespace App\Http\Controllers\Back\Stock;

use App\Models\Back\Config\users;
use App\Models\Back\Stock\stocks;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class stocksDeleteOutController extends Controller
{
    public function delete($id){
        if ((users::find(Auth::id())->stocks()->find($id))){
            stocks::find($id)->delete();
            return redirect('panel/stok/stokhareketleri')->with('status','Stok Çıkışı  Başarıyla Silindi!');

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
