<?php

namespace App\Http\Controllers\Back\Sales;

use App\Models\Back\Config\users;
use App\Models\Back\Sales\invoices;
use App\Models\Back\Sales\invoicesContents;
use App\Models\Back\Stock\products;
use App\Models\Back\Stock\stocks;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class invoicesDeleteController extends Controller
{
    public function delete($id){
        if ((users::find(Auth::id())->invoices()->find($id))){
            invoices::find($id)->delete();
            $contents=invoicesContents::where('invoices_id',$id)->get();
            foreach ($contents as $content){
                $product=products::find($content->products_id);
                $product->amount=($product->amount)+($content->stock);
                $product->save();
                $content->delete();
            }
            $stocks=stocks::where('invoices_id',$id)->get();
            foreach ($stocks as $stock){
                $stock->delete();
            }

            return redirect('panel/satislar')->with('status','Fatura Başarıyla Silindi!');

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
