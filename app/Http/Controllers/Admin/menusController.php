<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class menusController extends Controller
{
    public function menuler(){
        $menuler=Admin::menuler_();
        $alt_menuler=Admin::altmenuler_();
        View::share('menuler',$menuler);
        View::share('alt_menuler',$alt_menuler);
        return view('admin.menuler');
    }
    public function activatorMenu($menu_id){
        Admin::activatorMenu_($menu_id);
        return redirect('admin/menuler')->with('message','Menü Güncellendi');
    }
    public function activatorAltMenu($altmenu_id){
        Admin::activatorAltMenu_($altmenu_id);
        return redirect('admin/menuler')->with('message','Menü Güncellendi');
    }
    public function deleteMenu($menu_id){
        Admin::menuSil_($menu_id);
        return redirect('admin/menuler')->with('message','Menü Silindi');
    }
    public function deleteSubMenu($menusub_id){
        Admin::menuSubSil_($menusub_id);
        return redirect('admin/menuler')->with('message','Menü Silindi');
    }
    public function menuUpdate($menu_id){
        $menuIcerik=Admin::menuCheck_($menu_id);
        View::share('menuIcerik',$menuIcerik);
        return view('admin.menuUpdate');
    }
    public function menuUpdateSub($submenu_id){
        $menuIcerik=Admin::menuCheckSub_($submenu_id);
        View::share('menuIcerik',$menuIcerik);
        return view('admin.menuUpdateSub');
    }
    public function menuUpdatePost(Request $request,$menu_id){
        Admin::menuUpdatePost($request,$menu_id);
        return redirect('admin/menuler');
    }
    public function menuUpdateSubPost(Request $request,$submenu_id){
        Admin::menuUpdateSubPost($request,$submenu_id);
        return redirect('admin/menuler');
    }
    public function menusubAdd($menu_id){
        View::share('menu',$menu_id);
        return view('admin.menusubAdd');
    }
    public function menusubAddPost(Request $request,$menu_id){
        Admin::menusubAddPost_($request,$menu_id);
        return redirect('/admin/menuler');
    }
    public function menuAdd(){
        return view('admin.menuAdd');
    }
    public function menuAddPost(Request $request){
        Admin::menuAddPost_($request);
        return redirect('admin/menuler');
    }
}
