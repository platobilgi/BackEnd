<?php

namespace App\Http\Controllers;


use App\Models\Front\Config\menus;
use App\Models\Front\Config\menusSubs;
use App\Models\Front\Config\sliders;
use App\Models\Front\Config\statics;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
}
