<?php

namespace App\Http\Controllers;

use App\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function all(){
        $apartments = Apartment::all();
        return view("apartment.list",[
            "apartments"=>$apartments
        ]);
    }
}
