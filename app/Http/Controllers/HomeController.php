<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class HomeController extends Controller
{

    // this is for admin page function
    public function index(){
        return view('admin.index');
    }


    // this is for home function 

    public function home(){
        return view('home.index');
    }

    // public function homepage(){
        // return view('index');
    // }
}
