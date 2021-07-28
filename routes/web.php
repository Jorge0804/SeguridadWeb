<?php

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
//Probando fallo de git v1
Route::get('/', function () {
    cookie('cookie_jorge2', 'jorge', 2);
    return view('welcome');
    //return response('Hola c:')->cookie('cookie_jorge', 'jorge', 2);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
