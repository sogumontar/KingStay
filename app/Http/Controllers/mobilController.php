<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mobilController extends Controller
{
    public function create(){
        return view('mobil.create');
    }
}
