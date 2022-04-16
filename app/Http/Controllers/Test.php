<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    //test store function
    public function store(Request $request){
        dd($request->all());
    }
}
