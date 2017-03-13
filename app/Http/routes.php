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

/*
Route::get('cursos', [
    'as' => 'cursos',
    'uses' => 'WebController@cursos_polo'
]);
*/

/*
Route::get('curso/{id}', [
    'as' => 'curso_mostrar',
    'uses' => 'WebController@curso_mostrar_polo'
]);
*/

/*
Route::get('video/{id}', [
    'as' => 'curso_video',
    'uses' => 'WebController@curso_video_polo'
]);
*/

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

  Route::get('/', [
    'as' => 'admin-index',
    'uses' => 'AdminController@index'
  ]);

  Route::get('option', [
    'as' => 'admin-option',
    'uses' => 'AdminController@option'
  ]);

  Route::get('social', [
    'as' => 'admin-social',
    'uses' => 'AdminController@social'
  ]);

  Route::post('social/save/ajax',[
    'as' => 'social-save-ajax',
    'uses' => 'AdminController@socialSaveAjax'
  ]);

  Route::get('social/show/ajax',[
    'as' => 'social-show-ajax',
    'uses' => 'AdminController@socialShowAjax'
  ]);


  /*
  |-----------------------------------------
  |Route Galleria
  |-----------------------------------------
   */

  Route::group(['prefix' => 'galeria'], function(){

    Route::get('/', [
      'as' => 'admin-galeria',
      'uses' => 'AdminController@galeria'
    ]);

    /**************
     VIDEO GALERIA
    **************/
    //START
    Route::get('video', [
      'as' => 'admin-galeria-video',
      'uses' => 'AdminController@galeriaVideo'
    ]);

    Route::get('video/{nameFile}/delete', [
      'as' => 'admin-galeria-video-delete',
      'uses' => 'AdminController@galeriaVideoDelete'
    ]);

    Route::get('share/{id}/image/video', [
      'as' => 'admin-galeria-share-image-video',
      'uses' => 'AdminController@galeriaShareVideo'
    ]);

    Route::post('share/store/image/video', [
      'as' => 'admin-galeria-share-image-video-store',
      'uses' => 'AdminController@galeriaShareVideoStore'
    ]);

    Route::put('share/update/image/video/{id}/', [
      'as' => 'admin-galeria-share-image-video-update',
      'uses' => 'AdminController@galeriaShareVideoUpdate'
    ]);
    //END

    /**************
    CURSO GALERIA
    **************/
    //START
    Route::get('curso', [
      'as' => 'admin-galeria-course',
      'uses' => 'AdminController@galeriaCurso'
    ]);

    Route::get('course/{nameFile}/delete', [
      'as' => 'admin-galeria-course-delete',
      'uses' => 'AdminController@galeriaCourseDelete'
    ]);

    Route::get('share/{id}/image/course', [
      'as' => 'admin-galeria-share-image-course',
      'uses' => 'AdminController@galeriaShareCourse'
    ]);

    Route::post('share/store/image/course', [
      'as' => 'admin-galeria-share-image-course-store',
      'uses' => 'AdminController@galeriaShareCourseStore'
    ]);

    Route::put('share/update/image/course/{id}/', [
      'as' => 'admin-galeria-share-image-course-update',
      'uses' => 'AdminController@galeriaShareCourseUpdate'
    ]);
    //END

    /**************
    POST GALERIA
    **************/
    //START
    Route::get('post', [
      'as' => 'admin-galeria-post',
      'uses' => 'AdminController@galeriaPost'
    ]);

    Route::get('post/{nameFile}/delete', [
      'as' => 'admin-galeria-post-delete',
      'uses' => 'AdminController@galeriaPostDelete'
    ]);

    Route::get('share/{id}/image/post', [
      'as' => 'admin-galeria-share-image-post',
      'uses' => 'AdminController@galeriaSharePost'
    ]);

    Route::post('share/store/image/post', [
      'as' => 'admin-galeria-share-image-post-store',
      'uses' => 'AdminController@galeriaSharePostStore'
    ]);

    Route::put('share/update/image/post/{id}/', [
      'as' => 'admin-galeria-share-image-post-update',
      'uses' => 'AdminController@galeriaSharePostUpdate'
    ]);
    //END

    /**************
    DESIGN GALERIA
    **************/
    //START
    Route::get('design', [
      'as' => 'admin-galeria-design',
      'uses' => 'AdminController@galeriaDesign'
    ]);

    Route::get('design/{nameFile}/delete', [
      'as' => 'admin-galeria-design-delete',
      'uses' => 'AdminController@galeriaDesignDelete'
    ]);

    Route::get('share/{id}/image/design', [
      'as' => 'admin-galeria-share-image-design',
      'uses' => 'AdminController@galeriaShareDesign'
    ]);

    Route::post('share/store/image/design', [
      'as' => 'admin-galeria-share-image-design-store',
      'uses' => 'AdminController@galeriaShareDesignStore'
    ]);

    Route::put('share/update/image/design/{id}/', [
      'as' => 'admin-galeria-share-image-design-update',
      'uses' => 'AdminController@galeriaShareDesignUpdate'
    ]);
    //END


  });

  /*
  |-----------------------------------------
  |Route Galeria Fin
  |-----------------------------------------
   */

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
