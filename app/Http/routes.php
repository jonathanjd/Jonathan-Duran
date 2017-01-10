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

Route::get('/api/services','PresupuestoController@servicios_ajax');

Route::get('diseño',[
  'as' => 'diseño',
  'uses' => 'WebController@diseño'
]);

Route::get('cursos',[
  'as' => 'cursos',
  'uses' => 'WebController@cursos'
]);

Route::group(['prefix' => 'presupuesto'], function() {

  Route::get('index',[
    'as' => 'presupuesto.index',
    'uses' => 'PresupuestoController@index'
    ]);

  Route::get('diseño/{id}/servicio/crear',[
    'as' => 'presupuesto.diseño.servicios',
    'uses' => 'PresupuestoController@crear'
    ]);

  Route::post('diseño/{id}/store',[
    'as' => 'presupuesto.diseño.servicios.datos.create',
    'uses' => 'PresupuestoController@store'
    ]);

});

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

  Route::resource('design', 'DesignController');

  Route::resource('service', 'ServiceController');

  Route::get('course',[
    'as' => 'course-index',
    'uses' => 'CourseController@index'
  ]);

  Route::get('/api/course','CourseController@list_course');

  Route::get('video',[
    'as' => 'video-index',
    'uses' => 'VideoController@index'
  ]);

});

Route::post('enviar/correo',[
  'as' => 'enviar',
  'uses' => 'WebController@enviar'
]);

Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');
