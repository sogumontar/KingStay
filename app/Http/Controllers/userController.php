<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function store(request $request){
    	$nama=$request->input('nama');
    	$email=$request->input('email');
    	$password=$request->input('password');

    	echo DB::insert('insert into users(name,email,password) values(?,?,?)',[$nama,$email,md5($password)]);


    }
    public function login(request $request){
    	
    	// print_r($request->input());
    	// return false;
    	$email=$request->input('email');
    	$password=$request->input('password');

    	$config= DB::select('select id from users where email=? AND password=?',[$email,md5($password)]);

    	if(count($config)){
    		echo "login succes";
    	}else{
    		echo "login probelm";
    	}

    }
}
