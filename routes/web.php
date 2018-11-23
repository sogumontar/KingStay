<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/index');
});

Route::group(['prefix'=>'kendaraan'],function(){
   
    Route::get('/','KendaraanController1@index');
    Route::get('/create','KendaraanController1@create');
    Route::get('/store','KendaraanController1@store');
    Route::get('/show/{id}','KendaraanController1@show');
    Route::get('/update{id}','KendaraanController1@update');
    Route::get('/destroy/{id}','KendaraanController1@destroy');
    Route::get('/belajar','BelajarController@getpage');
    Route::get('/test','mobilController@create');
     
});

//Route::get('/', 'WelcomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mobil/create','mobilController@create')->name('mobil.create');
Route::get('homestay/create','homestayController@create')->name('homestay.create');
Route::post('homestay/create','homestayController@store')->name('homestay.store');
Route::get('homestay/view','homestayController@view')->name('homestay.view');
Route::get('homestay/{id}/edit','homestayController@edit')->name('homestay.edit');
Route::patch('homestay/{id}/edit','homestayController@update')->name('homestay.update');
// Route::delete('homestay/{homestay}/destroy','homestayController@destroy')->name('homestay.destroy');

Route::delete('/homestay/{homestay}/delete','homestayController@destroy')->name('homestay.destroy');
Route::get('admin','AdminController@index')->middleware('role:admin');
// Route::get('/homestay/{id}/edit','homestayController@edit')->name('homestay.edit');

// Route::group(['middleware'=>['web','auth','roles']],function(){
// 	Route::group(['roles'->'Member'],function(){
// 		Route::resources('site','SiteController');
// 	});
// 	Route::group(['roles'->'Admin'],function(){
// 		Route::resource('user','UserController');
// 	});
// });