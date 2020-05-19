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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// --------------------------- EDIT USUARI ---------------------------
Route::get('/perfil', 'UserController@perfil')->name('perfil');
Route::post('/perfil', 'UserController@update_avatar')->name('update_avatar');
Route::post('/delete', 'UserController@delete_user')->name('delete_user');

// --------------------------- ----------- ---------------------------



// --------------------------- RESTAURANT ---------------------------
Route::get('/restaurant', 'RestaurantController@mostrarTodos')->name('restaurant');
Route::get('/restaurant/{id}', 'RestaurantController@mostrar_restaurante')->name('restaurant_id');
Route::get('/modificaRestaurant/{id}', 'RestaurantController@modificaRestaurant')->name('modificaRestaurant');
Route::post('/restaurante/{id}', 'RestaurantController@updateRestaurant')->name('updateRestaurant');
Route::post('/restaurant/{id}', 'RestaurantController@opinioSend')->name('opinioSend');





// ---------------------creacio--------------------
Route::get('/creacioRestaurant', 'RestaurantController@creacioRestaurant')->name('creacioRestaurant');
Route::post('/agregaRestaurant', 'RestaurantController@agregarRestaurant')->name('agregarRestaurant');


// ---------------------imatge---------------------
Route::get('/imatgeRestaurant/{id}', 'RestaurantController@imatge')->name('imatgeRestaurant');
Route::post('dropzone/upload', 'RestaurantController@upload')->name('dropzone.upload');
Route::get('dropzone/fetch', 'RestaurantController@fetch')->name('dropzone.fetch');
Route::get('dropzone/delete', 'RestaurantController@delete')->name('dropzone.delete');

// --------------------------- ----------- ---------------------------


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');