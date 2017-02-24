<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Service;

class ServiceController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Consulta Eloquent
        $services = Service::orderBy('id','desc')->paginate('7');
        //Vista
        return view('admin.service.index')->with('services',$services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Vista
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $this->validate($request,[

            'name' => 'required|max:50',

        ]);

        //Save
        $service = new Service($request->all());

        $service->save();

        //Message
        flash('Datos Registrados','success');

        //Redirect
        return redirect()->route('admin.service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Buscar Service
        $service = Service::find($id);
        $this->notFound($service);
        //Vista
        return view('admin.service.edit')->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validation
        $this->validate($request,[

            'name' => 'required|max:50',

        ]);
        //Update
        $service = Service::find($id);
        $this->notFound($service);
        $service->fill($request->all());
        $service->save();
        //Message
        flash('Datos Editados','success');
        //Redirect
        return redirect()->route('admin.service.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Buscar Service
        $service = Service::find($id);
        $this->notFound($service);
        //Eliminar Diseño
        $service->delete();
        //Mensaje
        flash('Datos Eliminados','success');
        //Redirect
        return redirect()->route('admin.service.index');
    }
}
