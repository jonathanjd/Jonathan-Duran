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

Route::get('/', [
    'as' => 'index',
    'uses' => 'WebController@index'
]);

Route::group(['prefix' => 'admin'], function () {

  Route::get('index', [
    'as' => 'admin-index',
    'uses' => 'AdminController@index'
  ]);

  Route::resource('category', 'CategoryController');

});

Route::post('enviar/correo',[
  'as' => 'enviar',
  'uses' => 'WebController@enviar'
]);

Route::auth();

Route::get('/home', 'HomeController@index');
