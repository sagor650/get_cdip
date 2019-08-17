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
    return view('front-end.land');
});


Route::get ('home',function(){
	return view('home-page.home');
});

Route::get ('profile',function(){
	return view('home-page.profile.View_Profile');
});
Route::get ('Edit_Profile',function(){
	return view('home-page.profile.Edit_Profile');
});
Route::get ('assignment',function(){
    return view('home.assignment');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
