<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Plan;

use App\Service;

use App\Feature;

class PlanController extends Controller
{

    public function __construct()
    {
      # code...
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $plans = Plan::orderBy('id','DESC')->get();
        return view('admin.plan.index')->with('plans',$plans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $services = Service::orderby('id','ASC')->lists('name','id');
        return view('admin.plan.create')->with('services',$services);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
          'name' => 'required',
          'price' => 'required|integer',
          'time' => 'required',
          'enable' => 'required',
          'service_id' => 'required'
        ]);

        $plan = new Plan($request->all());
        $plan->save();

        flash('Datos Registrados','success');

        return redirect()->route('admin.plan.show',$plan);

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
        $plan = Plan::find($id);
        $this->notFound($plan);
        $features = Feature::orderBy('id','ASC')->where('type_service_id',$plan->id)->get();
        return view('admin.plan.show')->with('plan',$plan)->with('features',$features);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $services = Service::orderby('id','ASC')->lists('name','id');
        $plan = Plan::find($id);
        $this->notFound($plan);
        return view('admin.plan.edit')->with('plan',$plan)->with('services',$services);
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
        //
        $this->validate($request,[
          'name' => 'required',
          'price' => 'required|integer',
          'time' => 'required',
          'enable' => 'required',
          'service_id' => 'required'
        ]);

        $plan = Plan::find($id);
        $this->notFound($plan);
        $plan->slug = null;
        $plan->fill($request->all());
        $plan->save();
        flash('Datos Editados','success');
        return redirect()->route('admin.plan.show',$plan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $plan = Plan::find($id);
        $this->notFound($plan);
        $plan->delete();
        flash('Datos Eliminados','success');
        return redirect()->route('admin.plan.index');

    }
}
