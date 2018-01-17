<?php

namespace App\Http\Controllers\Api;

use App\Models\Back\Config\cities;
use App\Models\Back\Config\states;
use App\Models\Back\Sales\customers;
use App\Models\Back\Sales\invoices;
use App\Models\Back\Sales\payments;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class apiController extends Controller
{
    //Tüm şehirlerde ödemesi gecikmiş faturalar için  yapılan ödeme ve yapılması gereken ödeme.
    public function unpaid_all($user_id){

        $cities=cities::all();
        foreach ($cities as $city){
            $customers=customers::where('cities_id',$city->id)->where('users_id',$user_id)->get();
            foreach ($customers as $customer){
                $city->ucret=invoices::where('customers_id',$customer->id)->whereDate('expiryDate', '<', Carbon::today()->toDateString())->sum('fee');
                $city->odenen=invoices::where('customers_id',$customer->id)->whereDate('expiryDate', '<', Carbon::today()->toDateString())->sum('paid');
            }
        }

        return response()->json(
            [
                'sehir' => $city,

            ]
        );

    }
    //Tüm ilçelerde ödemesi gecikmiş faturalar için  yapılan ödeme ve yapılması gereken ödeme.
    public function unpaid_all_states($user_id){

        $states=states::all();
        foreach ($states as $state){
            $customers=customers::where('states_id',$state->id)->where('users_id',$user_id)->get();
            foreach ($customers as $customer){
                $state->ucret=invoices::where('customers_id',$customer->id)->whereDate('expiryDate', '<', Carbon::today()->toDateString())->sum('fee');
                $state->odenen=invoices::where('customers_id',$customer->id)->whereDate('expiryDate', '<', Carbon::today()->toDateString())->sum('paid');
            }
        }

        return response()->json(
            [
                'ilce' => $state,

            ]
        );

    }
    //Aranılan şehirde ödemesi gecikmiş faturalar için  yapılan ödeme ve yapılması gereken ödeme.
    public function unpaid_city($user_id,$city_id){

        $city=cities::find($city_id);
            $customers=customers::where('cities_id',$city->id)->where('users_id',$user_id)->get();
            foreach ($customers as $customer){
               $city->ucret=invoices::where('customers_id',$customer->id)->whereDate('expiryDate', '<', Carbon::today()->toDateString())->sum('fee');
               $city->odenen=invoices::where('customers_id',$customer->id)->whereDate('expiryDate', '<', Carbon::today()->toDateString())->sum('paid');
            }


        return response()->json(
            [
                'sehir' => $city,

            ]
        );

    }
    //Aranılan ilçede ödemesi gecikmiş faturalar için  yapılan ödeme ve yapılması gereken ödeme.
    public function unpaid_states($user_id,$states_id){

        $states=states::find($states_id);
        $customers=customers::where('states_id',$states->id)->where('users_id',$user_id)->get();
        foreach ($customers as $customer){
            $states->ucret=invoices::where('customers_id',$customer->id)->whereDate('expiryDate', '<', Carbon::today()->toDateString())->sum('fee');
            $states->odenen=invoices::where('customers_id',$customer->id)->whereDate('expiryDate', '<', Carbon::today()->toDateString())->sum('paid');
        }


        return response()->json(
            [
                'ilce' => $states,

            ]
        );

    }
    //Tüm şehirlerdeki toplam müşteri sayısı.
    public function total_customers($user_id){

        $cities=cities::all();
        foreach ($cities as $city){
            $city->customers=customers::where('users_id',$user_id)->where('cities_id',$city->id)->count();
        }

        return response()->json(['city' => $city]);


    }
    //Aranan şehirdeki toplam müşteri sayısı.
    public function customers_city($user_id,$city_id){

        $city=cities::find($city_id);
            $city->customers=customers::where('users_id',$user_id)->where('cities_id',$city->id)->count();

        return response()->json(['city' => $city]);


    }
    //Aranan ilçedeki toplam müşteri sayısı.
    public function customers_states($user_id,$states_id){

        $state=states::find($states_id);
        $state->customers=customers::where('users_id',$user_id)->where('states_id',$state->id)->count();

        return response()->json(['state' => $state]);


    }
}
