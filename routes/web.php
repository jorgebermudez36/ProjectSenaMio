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

Route::get('/', function () {
    return view('welcome');
});
//Ruta de cargos
Auth::routes();

Route::get('api/cargo/select', 'CargosController@select');
Route::get('api/cargo/index', 'CargosController@index');
Route::post('api/cargo/load', 'CargosController@load');
Route::put('api/cargo/update', 'CargosController@update');
Route::delete('api/cargo/delete', 'CargosController@delete');

//Employe's routes

Auth::routes();

Route::post('api/employe/load', 'EmployeController@load');
Route::put('api/employe/update', 'EmployeController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
