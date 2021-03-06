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

Route::get('/', 'MainController@index')->name('index');
Route::get('/Country/Colombia', 'MainController@postColombia')->name('colombia');
Route::get('/country/Peru', 'MainController@postPeru')->name('peru');
Auth::routes();

Route::post('follow/{user}', 'FollowsController@store');

Route::get('/p/create','PostsController@create');
Route::post('/p','PostsController@store');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
Route::delete('/profile/{user}', 'PostsController@destroy')->name('posts.destroy');

Route::get('autenticar/cargarfoto/' ,'VerificarUserController@cargarfoto')->name('cargarfotoAU');
Route::post('autenticar/cargarfoto/' , 'VerificarUserController@verificarfotos')->name('verificarfotos');
Route::get('autenticar/dashboard','VerificarUserController@index')->name('menuverificar');
Route::get('autenticar/dashboard/ver/{id}','VerificarUserController@verfotos')->name('verfoto');
Route::get('autenticar/dashboard/activar/{id}','VerificarUserController@activar')->name('activaruser');