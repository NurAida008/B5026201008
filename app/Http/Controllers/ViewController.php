<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showPraktikum2()
    {
        return view('prak2web');
    }

    function showets()
    {
        return view('ets');
    }

    function gravity()
    {
        return view('gravity');
    }

    function physics(Request $request)
    {
        return view ('physics');
    }



}
