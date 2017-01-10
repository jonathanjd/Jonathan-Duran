<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Design;

use App\Service;

use App\Presupuesto;

use Mail;

class PresupuestoController extends Controller
{
    //

    public function index()
    {

    	//Lista de Diseños
    	$designs = Design::orderBy('id','DESC')->paginate(5);
    	//Vista
    	return view('web.page.presupuesto.index')->with('designs',$designs);
    }

    public function crear($id)
    {

        //Buscar Diseño
        $design = Design::find($id);
        //Listas de Servicios
        $services = Service::orderBy('id','DESC')->get();
        //Vista
        return view('web.page.presupuesto.create')->with('design',$design)->with('services',$services);

    }

    public function store(Request $request,$id)
    {
      # code...
      #

      if ($id == null) {
        # code...
        return redirect()->route('presupuesto.index');
      }

      $this->validate($request,[
        'customer' => 'required|max:50',
        'email' => 'required|email|max:50',
        'message' => 'max:1000',
        'blog' => 'required'
      ]);

      $services = Service::all();

      foreach ($services as $service) {
        # code...
        if ($service->id == 5) {
          # code...
          $design = $service->price;
        }elseif ($service->id == 6) {
          # code...
          $car = $service->price;
        }elseif ($service->id == 7) {
          # code...
          $blog = $service->price;
        }elseif ($service->id == 8) {
          # code...
          $hosting = $service->price;
        }
        }


      if (($request->blog == 'si') && ($request->car =='no')) {
        # code...
        $total = $design + $blog + $hosting;
      } elseif (($request->blog == 'no') && ($request->car =='si')) {
        # code...
        $total = $design + $car + $hosting;
      } elseif (($request->blog == 'si') && ($request->car =='si')) {
        # code...
        $total = $design + $car + $hosting + $blog;
      } else {
        # code...
        $total = $design + $hosting;
      }

      $presupuesto = new Presupuesto($request->all());
      $presupuesto->design_id = $id;
      $presupuesto->blog = $request->blog;
      $presupuesto->car = $request->car;
      $presupuesto->total = $total;
      $presupuesto->save();

      $design = Design::find($id);

      if ($request->message == null) {
        # code...
        $mensaje = 'Sin Mensaje';
      }else{
        $mensaje = $request->message;
      }

      $datos_email = [
        'customer' => $request->customer,
        'email' => $request->email,
        'mensaje' => $mensaje,
        'blog' => $request->blog,
        'car' => $request->car,
        'total' => $total,
        'name_design' => $design->name,
        'demo' => $design->url
      ];

      Mail::send('web.page.presupuesto.email_presupuesto_blogclon',$datos_email, function($msj) {
        $msj->subject('Presupuesto Creado - Blog Clon');
        $msj->to('headjd@gmail.com');
      });

      Mail::send('web.page.presupuesto.email_presupuesto_cliente',$datos_email, function($msj) use ($request) {
        $msj->subject('Presupuesto para sitio Web - Blog Clon');
        $msj->to($request->email);
      });


      flash('Presupuesto Creado con Éxito','success');

      return redirect()->route('presupuesto.index');

    }

    public function servicios_ajax()
    {
      # code...
      $response = Service::all();

      return response()->json($response);
    }

}
