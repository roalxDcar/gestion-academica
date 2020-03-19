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
    return redirect()->route('login');
});


// ----------------LOGIN-----------------------------------------
Auth::routes();
//Cerrar Sesion
Route::get('/logout','LoginController@logout')->name('logout');
//Interfaz de Login
Route::get('/login', function(){
    return view('auth.login');
})->name('login');
//Intentos de Usuarios
ROute::get('/login1','Auth\LoginController@login1')->name('login1');


// ------------------PANTALLA PRINCIPAL------------------------------------
//Pantalla Principal, para mostrar graficas
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
