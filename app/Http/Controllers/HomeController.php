<?php

namespace App\Http\Controllers;

use App\Models\Front\Config\menus;
use App\Models\Front\Config\menusSubs;
use App\Models\Front\Config\sliders;
use App\Models\Front\Config\statics;
use Illuminate\Http\Request;
use View;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $menus=menus::all();
        $menu_sub=menusSubs::all();
        $sliders=sliders::all();
        $slider_count=$sliders->count();
        $statics =statics::find(1);
        View::share('slider_count',$slider_count);
        View::share('menus',$menus);
        View::share('menu_sub',$menu_sub);
        View::share('sliders',$sliders);
        View::share('statics',$statics);


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function disallow(){
        return view('muhasebe.disallow');
    }
    public function notFound(){
        return view('muhasebe.404');
    }
    public function arama(Request $request){
        $sonuc = sliders::where('description','like','%'.$request->get('arama').'%')->orWhere('title','like','%'.$request->get('arama').'%')->get();
        View::share('sonuc',$sonuc);
        return view('layouts.search');
    }
}
