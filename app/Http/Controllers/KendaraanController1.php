<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KendaraanController1 extends Controller
{
    public function index(){
        $kendaraans= \App\Kendaraan::all();//Mengambil data kendaaran(all)
        
        return view('crud.kendaraan.view',compact('kendaraans'));//Melempar data ke view
        
    }
}
