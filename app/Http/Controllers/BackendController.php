<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    //

    public function index(Request $request){

        return view('backend.index');
    }
}
