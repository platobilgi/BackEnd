<?php

namespace App\Http\Controllers\Back\Sales;

use App\Models\Back\Sales\customers;
use App\Models\Back\Sales\invoices;
use App\Models\Back\Sales\invoicesContents;
use App\Models\Back\Stock\products;
use App\Models\Back\Stock\stocks;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Support\Facades\Input;
use Validator;
class invoicesAddController extends Controller
{
    public function add_get(){
        $fatura=new invoices();
        View::share('fatura',$fatura);
        return view('muhasebe.faturaEkle');
    }
    public function add_post(Request $request){
        $validator = Validator::make(Input::all(),[
            'description' => 'required',
            'customers_id' => 'required',
            'currency' => 'required',
            'exchangeRate' => 'required',
            'fee' => 'required',






        ]);
        if ($validator->fails()){
            return redirect('panel/satislar/fatura-ekle')->withErrors($validator)->withInput();

        }

        $invoice=new invoices();
        $invoice->fill(Input::all());
        $invoice->users_id=Auth::id();
        $invoice->saveOrFail();
        $count=count($request->get('urun'));
        $urun=$request->get('urun');
        $musteri=$request->get('customers_id');
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
            $customer->balance=$customer->balance-$invoice->fee;
            $customer->save();


        }


        return redirect('panel/satislar')->with('status','Fatura Başarıyla Eklendi!');
        }}
