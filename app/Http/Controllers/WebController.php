<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Http\Requests\SendEmailRequest;

use App\Http\Requests;

use App\Design;

class WebController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('web.index');
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

}
