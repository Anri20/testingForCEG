<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    function testing(){
        
        return view('testing');
    }

    function testing2(){
        return view('testing2');
    }
}
