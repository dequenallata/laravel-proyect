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
    // return view('welcome');
    //redireccion al login
    return view('auth.login');
});
// Route::get('/empleados','EmpleadosController@index');

// Route::get('/empleados/creacion','EmpleadosController@create');

Route::resource('empleados', 'EmpleadosController')->middleware('auth');

// Auth::routes();

//quitar registrar y recuperar
Auth::routes(['register'=>false,'reset'=>false]);
Route::get('/home', 'HomeController@index')->name('home');
