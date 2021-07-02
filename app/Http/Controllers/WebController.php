<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public  function  home(){
        return view('welcome');
    }
    public  function  aboutus(){
        return view('aboutus');
    }
//    public function category(){
//        return view('/category/list');
//    }
}
