<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllerSatu extends Controller
{
   
    public function index(){
        return view('Welcome');
    }

    public function satu(){
        //return "data pertama";
        $arraBuah = ["pisang", "rambutan", "Duku", "jambu"];
        return view("pasarBuah")->with("pasarBuah", $arraBuah);
    }
}