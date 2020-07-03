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

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect()->route('login');
});


// ----------------LOGIN-----------------------------------------
Auth::routes();
//Cerrar Sesion
//Interfaz de Login

Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/login', function(){
    return view('auth.login');
})->name('login');
//Intentos de Usuarios
ROute::get('/login1','Auth\LoginController@login1')->name('login1');


// ------------------PANTALLA PRINCIPAL------------------------------------
//Pantalla Principal, para mostrar graficas
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');



//Contenido


Route::group(['middleware' => 'auth'], function () {

    //Usuarios
    Route::get('/usuarios', 'UserController@index')->name('user.get');
    Route::get('/nuevo-usuario', 'UserController@create')->name('user.create');
    Route::post('/nuevo-usuario/guardar', 'UserController@store')->name('user.store');
    Route::get('/editar-usuario/{id}', 'UserController@edit')->name('user.edit');
    Route::put('/editar-usuario/actualizar/{id}', 'UserController@update')->name('user.update');


    //Roles
    Route::get('/roles', 'RoleController@index')->name('role.get');
    Route::post('/nuevo-rol/guardar', 'RoleController@store')->name('role.store');

});



