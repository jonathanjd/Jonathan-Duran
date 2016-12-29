<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

class CategoryController extends Controller
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
        //
        $categories = Category::orderBy('id','asc')->get();
        return view('admin.category.index')->with('categories',$categories);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.create');
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
        $this->validate($request, [
            'name' => 'unique:categories|required|max:25',
        ]);
        $category = new Category($request->all());
        $category->save();
        flash('Registro Guardado', 'success');
        return redirect()->route('admin.category.show',[$category]);
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
        $category = Category::find($id);
        if($category === null){
          return redirect()->route('admin-404');
        }else{
          return view('admin.category.show')->with('category',$category);
        }

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
        $category = Category::find($id);
        if($category === null){
          return redirect()->route('admin-404');
        }else{
          return view('admin.category.edit')->with('category',$category);
        }

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
        $category = Category::find($id);
        $category->fill($request->all());
        $category->save();
        flash('Registro Actualizado','success');
        return redirect()->route('admin.category.show',[$category]);
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
        $category = Category::find($id);
        if($category === null){
          return redirect()->route('admin-404');
        }
        $category->delete();
        flash('Registro Eliminado','success');
        return redirect()->route('admin.category.index');
    }

    public function delete($id)
    {
      # code...
      $category = Category::find($id);
      if($category === null){
        return redirect()->route('admin-404');
      }else{
        return view('admin.category.delete')->with('category',$category);
      }
    }
}
