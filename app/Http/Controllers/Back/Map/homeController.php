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
        $data2='';
        $geciken_faturalar=invoices::where('users_id',Auth::id())->whereDate('expiryDate', '<', Carbon::today()->toDateString())->whereRaw('fee > paid')->select('customers_id')->get();
        $sehirler=customers::whereIn('id',$geciken_faturalar)->select('cities_id','states_id')->get();
        $odenen_faturalar=invoices::where('users_id',Auth::id())->whereDate('expiryDate', '<', Carbon::today()->toDateString())->whereRaw('fee <= paid')->select('customers_id')->get();
        $odenen_sehirler=customers::whereIn('id',$odenen_faturalar)->select('cities_id','states_id')->get();
        $odeme_bekleyen=invoices::where('users_id',Auth::id())->whereDate('expiryDate', '>', Carbon::today()->toDateString())->whereRaw('fee > paid')->select('customers_id')->get();
        $odeme_bekleyen_sehirler=customers::whereIn('id',$odeme_bekleyen)->select('cities_id','states_id')->get();
        $erken_odenen=invoices::where('users_id',Auth::id())->whereDate('expiryDate', '>', Carbon::today()->toDateString())->whereRaw('fee <= paid')->select('customers_id')->get();
        $erken_odenen_sehirler=customers::whereIn('id',$erken_odenen)->select('cities_id','states_id')->get();

        foreach ($sehirler as $sehir){
            $data .= '{where: "Plaka = '.$sehir->cities_id.'",polygonOptions: {fillColor: "#ff2500"}},';

        }
        foreach ($odenen_sehirler as $odenen_sehir){
            $data .= '{where: "Plaka = '.$odenen_sehir->cities_id.'",polygonOptions: {fillColor: "#00FF00"}},';

        }
        foreach ($odeme_bekleyen_sehirler as $odeme_bekleyen_sehir){
            $data .= '{where: "Plaka = '.$odeme_bekleyen_sehir->cities_id.'",polygonOptions: {fillColor: "#fff702"}},';

        }
        foreach ($erken_odenen_sehirler as $erken_odenen_sehir){
            $data .= '{where: "Plaka = '.$erken_odenen_sehir->cities_id.'",polygonOptions: {fillColor: "#00FF00"}},';

        }
        //$data = ", styles: [{polygonOptions: {fillColor: '#00FF00',fillOpacity: 0.3}}, {where: 'Plaka > 23',polygonOptions: {fillColor: '#fff702'}}, {where: 'Plaka = 23',polygonOptions: {fillColor: '#ff2500',fillOpacity: 0.3}}]";
        View::share('data',$data);
        //return response()->json($data);
        return view('muhasebe.map');
    }
}
