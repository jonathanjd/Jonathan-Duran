<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Http\Requests\SendEmailRequest;

use App\Http\Requests;

use App\Design;

use App\Service;

use App\Plan;

use App\Post;

use App\Course;

use App\Video;

use Carbon\Carbon;

class WebController extends Controller
{
    //
    public function __construct()
    {
        # code...
        Carbon::setlocale('es');

    }


    public function enviar(SendEmailRequest $request)
    {
        # code...

        Mail::send('web.mensajeCorreo',$request->all(), function($msj) {
          $msj->subject('Mensaje desde Blog Clon');
          $msj->to('headjd@gmail.com');
        });

        Mail::send('web.mensajeCorreoRecibido',$request->all(), function($msj) use($request){
          $msj->subject('Blog Clon - Gracias');
          $msj->to($request->correo);
        });

    }

    public function call_hire_service(Request $request)
    {
      # code...

      $request->merge(['total' => 100]);

      Mail::send('polo.email.hire-phone',$request->all(), function($msj) {
          $msj->subject('Mensaje desde Blog Clon');
          $msj->to('headjd@gmail.com');
        });



    }

    public function email_hire_service(Request $request)
    {
      # code...
      Mail::send('polo.email.hire-email',$request->all(), function($msj) {
          $msj->subject('Mensaje desde Blog Clon');
          $msj->to('headjd@gmail.com');
        });

    }

    public function index_polo()
    {
      # code...
      $services = Service::orderBy('id','ASC')->get();
      $plans = Plan::orderBy('id','ASC')->take(3)->get();
      $designs = Design::orderBy('id','DESC')->take('8')->get();
      $posts = Post::orderBy('id','DESC')->take('4')->get();

      return view('polo.page.index')
              ->with('designs',$designs)
              ->with('services',$services)
              ->with('plans',$plans)
              ->with('posts', $posts);
    }

    public function blog_polo()
    {
      # code...
      $services = Service::orderBy('id','ASC')->get();
      $posts = Post::orderBy('id','DESC')->paginate(5);
      return view('polo.page.blog')->with('services', $services)
        ->with('posts', $posts);
    }

    public function post_polo($id)
    {
      # code...
      $post = Post::findBySlug($id);
      $this->notFound($post);
      $services = Service::orderBy('id','ASC')->get();
      return view('polo.page.blog_post')->with('services', $services)
        ->with('post', $post);
    }

    public function cursos_polo()
    {
      # code...
      $services = Service::orderBy('id','ASC')->get();
      $cursos = Course::paginate(5);
      return view('polo.page.course')->with('services', $services)
        ->with('cursos', $cursos);
    }

    public function curso_mostrar_polo($id)
    {
      # code...
      $services = Service::orderBy('id','ASC')->get();
      $curso = Course::findBySlug($id);
      $this->notFound($curso);
      $videos = Video::where('course_id',$curso->id)->orderBy('id','DESC')->paginate(6);
      return view('polo.page.course_show')->with('services', $services)
        ->with('curso', $curso)->with('videos', $videos);
    }

    public function curso_video_polo($id)
    {
      # code...
      $services = Service::orderBy('id','ASC')->get();
      $video = Video::findBySlug($id);
      $this->notFound($video);
      return view('polo.page.course_video')->with('services',$services)
        ->with('video',$video);
    }

    public function designs_polo()
    {
      # code...
      $services = Service::orderBy('id','ASC')->get();
      $designs = Design::orderBy('id','DESC')->paginate(7);
      return view('polo.page.designs')->with('designs',$designs)
        ->with('services',$services);
    }

    public function services_polo()
    {
      # code...
      $services = Service::orderBy('id','ASC')->get();
      return view('polo.page.services')->with('services',$services);
    }

    public function design_polo_details($id)
    {
      # code...
      $design = Design::findBySlug($id);
      $this->notFound($design);
      $designs = Design::all()->random(4);
      $plans = Plan::all();
      $services = Service::orderBy('id','ASC')->get();
      return view('polo.page.design_details')->with('services',$services)
        ->with('design', $design)->with('designs', $designs)
        ->with('plans', $plans);

    }

    public function service_show_polo($id)
    {
      # code...
      $services = Service::orderBy('id','ASC')->get();
      $plan = Plan::findBySlug($id);
      $this->notFound($plan);
      $plans = Plan::orderBy('id','ASC')->get();
      return view('polo.page.servicio_show')->with('plan',$plan)
        ->with('services',$services)
        ->with('plans',$plans);
    }

    public function service_hire_polo($id)
    {
      # code...
      $services = Service::orderby('id','ASC')->get();
      $plan = Plan::findBySlug($id);
      $this->notFound($plan);
      $plans = Plan::orderBy('id','ASC')->get();
      $designs = Design::orderBy('id','Desc')->get();
      return view('polo.page.servicio_hire')->with('plan',$plan)
        ->with('services',$services)
        ->with('plans',$plans)
        ->with('designs', $designs);
    }

}
