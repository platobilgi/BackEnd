<?php

namespace App\Http\Controllers\Admin;

use App\Models\Front\Config\sliders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
class sliderController extends Controller
{
    public function slider(){
        $sliderlar= sliders::all();
        View::share('sliderlar',$sliderlar);
        return view('admin.sliderlar');
    }
    public function activator($slider_id){
        Admin::activator_($slider_id);
        return redirect('admin/sliderlar')->with('message','Durum Güncellendi');
    }
    public function delete($slider_id){
        Admin::sliderSil_($slider_id);
        return redirect('admin/sliderlar')->with('message','Slider Silindi');
    }
    public function update($slider_id){
        $sliderlar = Admin::sliderUpdate_($slider_id);
        View::share('sliderlar',$sliderlar);
        return view('admin.sliderUpdate');
    }
    public function update_post(Request $request,$slider_id){
        Admin::sliderUpdatePost_($request,$slider_id);
        return redirect('admin/sliderlar/update/'.$slider_id)->with('message','Slider Güncellendi');
    }
    public function addSlide(){
        return view('admin.sliderAdd');
    }
    public function addSlider(Request $request){
        $file = $request->file;
        $name = time() . '.jpg';
        $file->move('images/slider/', $name);
        $adres=url('images/slider/').'/'.$name;
        Admin::addSlider_($request,$adres);
        return redirect('admin/sliderlar/')->with('message','Slider Eklendi');
    }
}
