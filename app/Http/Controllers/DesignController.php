<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Design;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Eloquent

        //Start
        $designs = Design::orderBy('id','DESC')->paginate(5);
        //End

        //*****
        //View
        //*****

        //Start
        return view('admin.design.index')->with('designs',$designs);
        //End
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //******
        //View
        //*****

        //Start
        return view('admin.design.create');
        //End
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //***********
        //Validation
        //***********

        //Start
        $this->validate($request,[

            'name' => 'required|unique:designs|max:50',
            'content' => 'required',
            'url' => 'required|active_url',
            'image' => 'required|mimes:jpeg,jpg,png'

        ]);
        //End

        //******
        //File
        //******

        //Start
        if ($request->file('image')) {
            # code...
            $file = $request->file('image');
            $name = 'design-' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/design/';
            $file->move($path,$name);
        }
        //End



        //*****
        //Save
        //*****

        //Start
        $design = new Design($request->all());
        $design->image = $name;
        $design->save();
        //End

        //********
        //Message
        //********

        //Start
        flash('Datos Registrados','success');
        //End

        //*********
        //Redirect
        //*********

        //Start
        return redirect()->route('admin.design.index');
        //End

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
        //Buscar Diseño
        $design = Design::find($id);
        //Vista
        return view('admin.design.edit')->with('design',$design);
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
            'content' => 'required',
            'url' => 'required|active_url',
            'image' => 'mimes:jpeg,jpg,png'

        ]);

        //File Si Tiene Imagen
        if ($request->file('image')) {
            //File
            $file = $request->file('image');
            $name = 'design-' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/design/';
            $file->move($path,$name);
            //Update
            $design = Design::find($id);
            $design->fill($request->all());
            $design->image = $name;
            $design->save();
            //Message
            flash('Datos Editados','success');
            //Redirect
            return redirect()->route('admin.design.index');

        }else{//File No Tiene Image
            //Update
           $design = Design::find($id);
           $design->name = $request->name;
           $design->content = $request->content;
           $design->url = $request->url;
           $design->save();
           //Message
           flash('Dattos Editados','success');
           //Redirect
           return redirect()->route('admin.design.index');
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
        //Buscar Diseño
        $design = Design::find($id);
        //Eliminar Diseño
        $design->delete();
        //Mensaje
        flash('Datos Eliminados','success');
        //Redirect
        return redirect()->route('admin.design.index');
    }
}
