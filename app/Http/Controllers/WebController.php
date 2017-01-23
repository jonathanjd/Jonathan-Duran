<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Http\Requests\SendEmailRequest;

use App\Http\Requests;

use App\Design;

use App\Service;

use App\Plan;

use Carbon\Carbon;

class WebController extends Controller
{
    //
    public function __construct()
    {
        # code...
        Carbon::setlocale('es');

    }

    public function index()
    {
        # code...
        return view('web.index');
    }

    public function cursos()
    {
      # code...
      return view('web.page.cursos.index');
    }

    public function diseño()
    {
      //Consulta
      $diseños = Design::orderBy('id','desc')->paginate(7);
      //Vista
      return view('web.page.design.index')->with('diseños', $diseños);
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

    public function index_polo()
    {
      # code...
      $services = Service::orderBy('id','ASC')->get();
      $plans = Plan::orderBy('id','ASC')->take(3)->get();
      $designs = Design::orderBy('id','DESC')->take('8')->get();

      return view('polo.page.index')
              ->with('designs',$designs)
              ->with('services',$services)
              ->with('plans',$plans);
    }

    public function designs_polo()
    {
      # code...
      $services = Service::orderBy('id','ASC')->get();
      $designs = Design::orderBy('id','DESC')->paginate(7);
      return view('polo.page.designs')->with('designs',$designs)->with('services',$services);
    }

    public function service_show_polo($id)
    {
      # code...
      $services = Service::orderBy('id','ASC')->get();
      $plan = Plan::find($id);
      $plans = Plan::orderBy('id','ASC')->get();
      return view('polo.page.servicio_show')->with('plan',$plan)->with('services',$services)->with('plans',$plans);
    }

}
