<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //This method will show our home page
    public function index2(){
        return view('home');
    }
}
