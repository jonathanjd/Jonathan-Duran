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

/*
|-------------------------------------------------------
|Route Web
|-------------------------------------------------------
|
 */

Route::get('/', [
    'as' => 'index',
    'uses' => 'WebController@index_polo'
]);

Route::get('blog', [
    'as' => 'blog',
    'uses' => 'WebController@blog_polo'
]);

Route::get('post/{id}', [
	'uses' => 'WebController@post_polo',
	'as' => 'blog_post'
]);

Route::get('diseños',[
  'as' => 'diseños',
  'uses' => 'WebController@designs_polo'
]);

Route::get('diseño/{id}',[
  'as' => 'diseño_details',
  'uses' => 'WebController@design_polo_details'
]);

Route::get('servicios',[
  'as' => 'servicios',
  'uses' => 'WebController@services_polo'
]);

Route::get('servicio/{id}/contratar',[
  'as' => 'servicio_contratar',
  'uses' => 'WebController@service_hire_polo'
]);

Route::post('enviar/call',[
  'as' => 'call',
  'uses' => 'WebController@call_hire_service'
]);

Route::post('enviar/email',[
  'as' => 'email',
  'uses' => 'WebController@email_hire_service'
]);

Route::get('servicio/{id}',[
  'as' => 'servicio',
  'uses' => 'WebController@service_show_polo'
  ]);

Route::get('/api/services','PresupuestoController@servicios_ajax');

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

Route::post('enviar/correo',[
  'as' => 'enviar',
  'uses' => 'WebController@enviar'
]);

/*
|-----------------------------------------
|Route Admin
|-----------------------------------------
 */

Route::group(['prefix' => 'admin'], function () {


  Route::get('404', [
    'as' => 'admin-404',
    'uses' => 'AdminController@error404'
  ]);

  Route::get('index', [
    'as' => 'admin-index',
    'uses' => 'AdminController@index'
  ]);

  Route::get('category/{category}/delete',
    ['as' => 'admin.category.delete',
    'uses'=>'CategoryController@delete']);

  Route::resource('category', 'CategoryController');

  Route::resource('design', 'DesignController');

  Route::resource('service', 'ServiceController');

  Route::resource('plan', 'PlanController');

  Route::resource('feature', 'FeatureController',[
    'only' => ['store','destroy']
  ]);

  Route::get('course/{id}/delete',[
    'as' => 'admin.course.delete',
    'uses' => 'CourseController@delete'
  ]);

  Route::resource('course', 'CourseController');

  Route::get('video/{id}/delete',[
    'as' => 'admin.video.delete',
    'uses' => 'VideoController@delete'
  ]);

  Route::resource('video', 'VideoController');

  Route::get('tag/{id}/delete',[
      'as' => 'admin.tag.delete',
      'uses' => 'TagController@delete'
    ]);

  Route::resource('tag', 'TagController');

  Route::get('post/{id}/delete',[
    'as' => 'admin.post.delete',
    'uses' => 'PostController@delete'
    ]);

  Route::resource('post', 'PostController');

});


/*
|--------------------------------------------
|Route Auth
|--------------------------------------------
 */
//Route::auth();
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');
