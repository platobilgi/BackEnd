<?php

namespace App\Http\Controllers\Back\Map;

use App\Models\Back\Sales\customers;
use App\Models\Back\Sales\invoices;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class homeController extends Controller
{
    public function map(){
        $data='';
        $geciken_faturalar=invoices::where('users_id',Auth::id())->whereDate('expiryDate', '<', Carbon::today()->toDateString())->whereRaw('fee > paid')->select('customers_id')->get();
        $sehirler=customers::whereIn('id',$geciken_faturalar)->select('cities_id','states_id')->get();
        foreach ($sehirler as $sehir){
            $data .= '{where: "Plaka = '.$sehir->cities_id.'",polygonOptions: {fillColor: "#ff2500"}},';

        }
        //$data = ", styles: [{polygonOptions: {fillColor: '#00FF00',fillOpacity: 0.3}}, {where: 'Plaka > 23',polygonOptions: {fillColor: '#fff702'}}, {where: 'Plaka = 23',polygonOptions: {fillColor: '#ff2500',fillOpacity: 0.3}}]";
        View::share('data',$data);
        //return response()->json($data);
        return view('muhasebe.map');
    }
}
