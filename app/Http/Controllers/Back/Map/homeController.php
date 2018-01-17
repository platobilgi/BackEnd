<?php

namespace App\Http\Controllers\Back\Map;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function map(){
        return view('muhasebe.map');
    }
}
