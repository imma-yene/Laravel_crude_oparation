<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Index(){
        return view('Home');
    }

public function welcome(){
    return view('welcome');
}

}