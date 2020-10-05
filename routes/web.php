<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('auth.login');
//});

Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin' ,'middleware'=>['auth','admin']],function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

});

Route::group(['as'=>'evaluator.','prefix'=>'evaluator', 'namespace'=>'Evaluator' ,'middleware'=>['auth','evaluator']],function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

});
Route::resource('customer','CustomerController');
//Route::group(['as'=>'Customer.'], function(){
//    Route::get('/','CustomerController@index')->name('dashboard/home');
//    Route::get('/create','CustomerController@create')->name('dashboard/create');
//    Route::get('/create','CustomerController@store')->name('dashboard/store');
//});

//Auth::routes();

//Route::get('/home', 'Admin\DashboardController@index')->name('home');
