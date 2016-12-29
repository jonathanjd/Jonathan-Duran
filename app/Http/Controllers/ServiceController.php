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
            'description' => 'required',
            'price' => 'required|integer',
            'image' => 'required|mimes:jpeg,jpg,png',
            'available' => 'required'

        ]);

        //File
        if ($request->file('image')) {
            # code...
            $file = $request->file('image');
            $name = 'service-' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/service/';
            $file->move($path,$name);
        }

        //Save
        $service = new Service($request->all());
        $service->image = $name;
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
            'description' => 'required',
            'price' => 'required|integer',
            'image' => 'mimes:jpeg,jpg,png',
            'available' => 'required'

        ]);

        //File Si Tiene Imagen
        if ($request->file('image')) {
            //File
            $file = $request->file('image');
            $name = 'service-' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/service/';
            $file->move($path,$name);
            //Update
            $service = Service::find($id);
            $service->fill($request->all());
            $service->image = $name;
            $service->save();
            //Message
            flash('Datos Editados','success');
            //Redirect
            return redirect()->route('admin.service.index');
        }else{//File No Tiene Imagen
            //Update
            $service = Service::find($id);
            $service->name = $request->name;
            $service->description = $request->description;
            $service->price = $request->price;
            $service->available = $request->available;
            $service->save();
            //Message
            flash('Datos Editados','success');
            //Redirect
            return redirect()->route('admin.service.index');
        }
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
        //Eliminar Diseño
        $service->delete();
        //Mensaje
        flash('Datos Eliminados','success');
        //Redirect
        return redirect()->route('admin.service.index');
    }
}
