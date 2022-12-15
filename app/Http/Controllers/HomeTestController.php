<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeTestController extends Controller
{
    public function __invoke()
    {
        return view('index');
    }
    
}
