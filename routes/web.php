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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/', 'Auth\LoginController@login');
Route::get('/panel', 'HomeController@plantilla');
Route::get('/transporte/{year}', 'Sistema\TransporteController@getTransporte');
Route::post('/transporte/save', 'Sistema\TransporteController@saveTransporte');
