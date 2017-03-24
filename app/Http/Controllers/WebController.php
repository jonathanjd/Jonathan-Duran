<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Plan\PlanRepository;

use App\Http\Requests\SendEmailRequest;

use App\Http\Requests;

use Mail;

use App\Design;

use App\Post;

use App\Course;

use App\Video;

use Carbon\Carbon;

class WebController extends Controller
{
    //
    protected $plans;

    public function __construct(PlanRepository $plans)
    {
        # code...
        Carbon::setlocale('es');
        $this->plans = $plans;
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

    /*
    |==========================================================
    |                    I  N   D   E   X
    |==========================================================
    */

    //=========================
    //         START
    //=========================

    public function index()
    {
      # code...
      return view('front-end.index');
    }


    public function index_polo()
    {
      # code...
      $designs = Design::where('enable', true)->orderBy('id','DESC')->take('8')->get();
      $posts = Post::where('enable', true)->orderBy('id','DESC')->take('4')->get();

      return view('polo.page.index')
              ->with('designs',$designs)
              ->with('plans', $this->plans->listTake())
              ->with('posts', $posts);
    }

    //===========================
    //           END
    //===========================

    /*
    |==========================================================
    |                    P   O   S   T
    |==========================================================
    */

    //=========================
    //         START
    //=========================

    public function blog_polo()
    {
      # code...

      $posts = Post::where('enable', true)->orderBy('id','DESC')->paginate(5);
      return view('polo.page.blog')->with('posts', $posts);
    }

    public function post_polo($id)
    {
      # code...
      $post = Post::findBySlug($id);
      $this->notFound($post);
      return view('polo.page.blog_post')->with('post', $post);
    }

    //===========================
    //           END
    //===========================

    public function cursos_polo()
    {
      # code...
      $cursos = Course::paginate(5);
      return view('polo.page.course')->with('cursos', $cursos);
    }

    public function curso_mostrar_polo($id)
    {
      # code...
      $curso = Course::findBySlug($id);
      $this->notFound($curso);
      $videos = Video::where('course_id',$curso->id)->orderBy('id','DESC')->paginate(6);
      return view('polo.page.course_show')->with('curso', $curso)
                ->with('videos', $videos);
    }

    public function curso_video_polo($id)
    {
      # code...
      $video = Video::findBySlug($id);
      $this->notFound($video);
      return view('polo.page.course_video')->with('video',$video);
    }

    /*
    |==========================================================
    |                D   E   S   I   G   N
    |==========================================================
    */

    //=========================
    //         START
    //=========================

    public function designs_polo()
    {
      # code...
      $designs = Design::where('enable', true)->orderBy('id','DESC')->paginate(7);
      return view('polo.page.designs')->with('designs',$designs);
    }

    public function design_polo_details($id)
    {
      # code...
      $design = Design::findBySlug($id);
      $this->notFound($design);
      $designs = Design::where('enable', true)->get()->random(4);
      return view('polo.page.design_details')->with('design', $design)
              ->with('designs', $designs)
              ->with('plans', $this->plans->all());
    }

    //===========================
    //           END
    //===========================

    /*
    |==========================================================
    |                  S   E   R   V   I   C   E
    |==========================================================
    */

    //=========================
    //         START
    //=========================

    public function services_polo()
    {
      # code...
      return view('polo.page.services');
    }



    public function service_show_polo($id)
    {
      # code...
      $this->notFound($this->plans->findBySlug($id));
      return view('polo.page.servicio_show')
              ->with('plan',$this->plans->findBySlug($id))
              ->with('plans',$this->plans->orderBy());
    }

    public function service_hire_polo($id)
    {
      # code...
      $this->notFound($this->plans->findBySlug($id));
      $designs = Design::where('enable', true)->orderBy('id','Desc')->get();
      return view('polo.page.servicio_hire')
              ->with('plan',$this->plans->findBySlug($id))
              ->with('plans',$this->plans->orderBy())
              ->with('designs', $designs);
    }

    //===========================
    //           END
    //===========================


}
