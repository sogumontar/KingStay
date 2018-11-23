<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\homestay;

class homestayController extends Controller
{
    public function create(){
    	return view('homestay.create');
    }
    public function store(){
    	homestay::create([
    		'nama'=>request('nama'),
    		'lokasi'=>request('lokasi')
    	]);

    	return redirect()->route('homestay.view')->with('succes','Berhasil menambah data');
    }
    public function view(){
    	$homestays =homestay::all();
    	return view('homestay.view',compact('homestays'));
    }
    public function edit($id){
        $homestays= homestay::find($id);
        return view('homestay.edit',compact('homestays'));
    }
    public function update($id){
        $homestays=homestay::find($id);
        $homestays->update([
            'nama'=>request('nama'),
            'lokasi'=>request('lokasi')
        ]);
        return redirect()->route('homestay.view')->with('info','update succes');
    }
    // public function destroy(homestay $homestays){
    //     $homestays->delete();

    //     return redirect()->route('homestay.destroy');
    // }
    public function destroy(homestay $homestay){
        $homestay->delete();
        return redirect()->route('homestay.view')->with('danger','Delete Berhasil');
    }
     
}
