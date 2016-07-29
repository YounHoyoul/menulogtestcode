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

Route::get('/',                           'RestaurantController@index'); 
Route::get('/api/restaurant/{postcode?}', 'RestaurantController@api'); 
Route::get('/api/menu/{id}',              'MenuController@api'); 
