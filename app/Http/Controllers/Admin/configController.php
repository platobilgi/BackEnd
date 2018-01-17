<?php

namespace App\Http\Controllers\Admin;

use App\Models\Front\Config\statics;
use View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class configController extends Controller
{
    public function ayarlar(){
        $ustbar = statics::find(1);
        View::share('ustbar',$ustbar);
        return view('admin/ayarlar');
    }
    public function ayarlar_post(Request $request){
        $ustbar = statics::find(1);
        $ustbar->fill(Input::all());
        $ustbar->save();
        return redirect('admin/ayarlar')->with('message','Kayıt Güncellendi');
    }
}
