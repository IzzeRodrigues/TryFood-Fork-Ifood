<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function home(){
        return view('tryvrau');
    }
    public function criar(){
        return view('criar');
    }
    public function restaurante(){
        return view('restaurante');
    }
}
