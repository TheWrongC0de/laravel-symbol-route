<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function welcomeFirstPage(){
       return view("welcome-pages.welcome-page1") ;
    }
    public function welcomeSecondPage(){
        return view("welcome-pages.welcome-page2");
    }
}
