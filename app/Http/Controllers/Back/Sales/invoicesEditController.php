<?php

namespace App\Http\Controllers\Back\Sales;

use App\Models\Back\Config\users;
use App\Models\Back\Sales\customers;
use App\Models\Back\Sales\invoices;
use App\Models\Back\Sales\invoicesContents;
use App\Models\Back\Stock\products;
use App\Models\Back\Stock\stocks;
use Carbon\Carbon;
use View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;
class invoicesEditController extends Controller
{
    public function edit_get($id){
        if ((users::find(Auth::id())->invoices()->find($id))){
            $invoice=invoices::find($id);
            $contents=$invoice->contents;
            $customer=customers::find($invoice->customers_id);
            View::share('fatura',$invoice);
            View::share('contents',$contents);
            View::share('customer',$customer);

            return view('muhasebe.faturaDuzenle');

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
    public function edit_post($id,Request $request){
        $validator = Validator::make(Input::all(),[
            'description' => 'required',
            'customers_id' => 'required',
            'currency' => 'required',
            'exchangeRate' => 'required',
            'fee' => 'required',






        ]);
        if ($validator->fails()){
            return redirect('panel/satislar/fatura-duzenle/'.$id)->withErrors($validator)->withInput();

        }

        {
            if ((users::find(Auth::id())->invoices()->find($id))){
                $invoice=invoices::find($id);
                $invoice->fill(Input::all());
                $invoice->users_id=Auth::id();
                $invoice->saveOrFail();
                $count=count($request->get('urun'));
                $urun=$request->get('urun');
                $musteri=$request->get('customers_id');
                $content=invoicesContents::where('invoices_id',$invoice->id)->get();
                invoicesContents::where('invoices_id',$invoice->id)->delete();

                foreach ($content as $c){
                    $stok=new stocks();
                    $item = new products();
                    $stok=stocks::where('invoices_id',$c->invoices_id)->delete();
                    $item=products::find($c->products_id);
                    $item->amount=($item->amount)+($c->stock);
                    $item->save();
                }
                foreach ($urun as $urunTek){
                    $product=products::find($urunTek['urunID']);
                    $content=new invoicesContents();
                    $content->products_id=$urunTek['urunID'];
                    $content->invoices_id=$invoice->id;
                    $content->stock=$urunTek['miktar'];
                    $content->unit_price=$urunTek['birimFiyat'];
                    $content->units=$urunTek['birim'];
                    $content->tax=$urunTek['vergi'];
                    $content->saveOrFail();
                    if ($product->tracking==0){
                        $stok=new stocks();
                        $customer=customers::find($request->customers_id);
                        $stok->description=$request->description;
                        $stok->customers_id=$request->customers_id;
                        $stok->address=$customer->address;
                        $stok->cities_id=$customer->cities_id;
                        $stok->states_id=$customer->states_id;
                        $stok->dateOfIssue=$request->dateOfIssue;
                        $stok->shipmentDate=$request->dateOfIssue;
                        $stok->products_id=$urunTek['urunID'];
                        $stok->amount=$urunTek['miktar'];
                        $stok->unit=$urunTek['birim'];
                        $stok->users_id=Auth::id();
                        $stok->types_id=13;
                        $stok->invoices_id=$invoice->id;
                        $stok->save();

                        $product->amount=($product->amount)-($urunTek['miktar']);
                        $product->save();



                    }


                }
                return redirect('panel/satislar')->with('status','Fatura Başarıyla Eklendi!');


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

}
