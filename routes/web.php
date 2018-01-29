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

//Impuyestos
Route::get('/impuesto/{year}', 'Sistema\ImpuestoController@getImpuestos');
Route::post('/impuesto/save', 'Sistema\ImpuestoController@saveImpuestos');

//Impuyestos
Route::get('/sobrepeso/{year}', 'Sistema\SobrepesoController@getSobrepeso');
Route::post('/sobrepeso/save', 'Sistema\SobrepesoController@saveSobrepeso');

//Impuyestos
Route::get('/varios/{year}', 'Sistema\VariosController@getVarios');
Route::post('/varios/save', 'Sistema\VariosController@saveVarios');
