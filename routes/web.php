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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// --------------------------- EDIT USUARI ---------------------------
Route::get('/editarPerfil', 'UserController@redireccionar')->name('editarPerfil');
Route::put('/editting', 'UserController@editar')->name('editarUsuariPersonal');


// --------------------------- ----------- ---------------------------





// --------------------------- RESTAURANT ---------------------------
Route::get('/restaurant', 'RestaurantController@mostrar')->name('restaurant');

Route::get('/crearRestaurant', 'RestaurantController@crear')->name('crearRestaurant');
Route::post('/agregar', 'RestaurantController@agregarRestaurant')->name('agregarRestaurant');
// --------------------------- ----------- ---------------------------


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');