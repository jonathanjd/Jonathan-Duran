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


  Route::get('404', [
    'as' => 'admin-404',
    'uses' => 'AdminController@error404'
  ]);

  Route::get('index', [
    'as' => 'admin-index',
    'uses' => 'AdminController@index'
  ]);


  Route::get('category/{category}/delete',['as' => 'admin.category.delete','uses'=>'CategoryController@delete']);
  Route::resource('category', 'CategoryController');

});

Route::post('enviar/correo',[
  'as' => 'enviar',
  'uses' => 'WebController@enviar'
]);

Route::auth();

Route::get('/home', 'HomeController@index');
