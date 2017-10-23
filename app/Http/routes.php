<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/station','HomeController@AddStation');
Route::post('/station','HomeController@AddStation');

Route::get('/gerant','HomeController@AddGerant');
Route::get('/produit','HomeController@Addproduit');
Route::get('/client','HomeController@Affclient');


