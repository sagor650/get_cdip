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


use App\Batch;
use App\Course;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front-end.land');
});

Route::get('/batch', function (Request $request)
{

    $isad=$request->id;

    $batches=Course::find($isad)->batches;
//    return $batches;
    return response()->json($batches,200) ;
//    return ['batches'=>$batches];

});
//
//
//Route::get ('profile',function(){
//    return view('home-page.profile.View_Profile');
//});
//Route::get ('edit',function(){
//    return view('home-page.profile.Edit_Profile');
//});
//
//
//Route::get ('/assignment',[
//    'uses' => 'AssignmentController@index',
//    'as'   => '/list'
//]);
//Route::get ('assignment/view/{id}',[
//    'uses' => 'AssignmentController@view',
//    'as'   => 'view'
//]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});
Route::group(['as'=>'instructor.','prefix'=>'instructor','namespace'=>'Instructor','middleware'=>['auth','instructor']],function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});
Route::group(['as'=>'student.','prefix'=>'student','namespace'=>'Student','middleware'=>['auth','student']],function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('assignment','AssignmentController');
    Route::resource('profile','ProfileController');
    Route::resource('document','DocumentController');
    Route::resource('question','QuestionController');
    Route::get('/question/answer/{id}','QuestionController@answer')->name('question.answer');
    Route::post('/question/answer/answer_store','QuestionController@answer_store')->name('question.answer_store');



//    Route::resource('profile.showProfile','ProfileController');
//    Route::get ('/profile/view',[
//    'uses' => 'ProfileController@index',
//    'as'   => 'profile.view'
//    ]);
//    Route::get ('/profile/edit',[
//        'uses' => 'ProfileController@showProfile',
//        'as'   => 'profile.edit'
//    ]);

});
