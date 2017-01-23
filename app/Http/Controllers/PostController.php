<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use App\Category;

use App\Tag;

use App\Image;

use Carbon\Carbon;

class PostController extends Controller
{

    public function __construct()
    {
        # code...
        Carbon::setlocale('es');
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
        $posts = Post::orderBy('id','DESC')->paginate(7);
        return view('admin.post.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::orderby('id','ASC')->lists('name','id');
        $tags = Tag::orderBy('id','ASC')->lists('name','id');
        return view('admin.post.create')
            ->with('categories',$categories)
            ->with('tags',$tags);
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
            'title' => 'required|max:100',
            'content' => 'required|min:10',
            'category_id' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'

        ]);


         if ($request->file('image')) {
            # code...
            $file = $request->file('image');
            $name = $request->title . '-' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/post/';
            $file->move($path,$name);
        }


        $post = new Post($request->all());
        $post->user_id = \Auth::user()->id;
        $post->save();

        $post->tags()->sync($request->tags);

        $image = new Image();
        $image->name = $name;
        $image->post()->associate($post);
        $image->save();

        flash('Datos Registrados','success');

        return redirect()->route('admin.post.show',$post);
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
        $post = Post::find($id);
        return view('admin.post.show')->with('post',$post);
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
        $categories = Category::orderby('id','ASC')->lists('name','id');
        $tags = Tag::orderBy('id','ASC')->lists('name','id');
        $post = Post::find($id);
        $my_tags = $post->tags->lists('id')->ToArray();
        return view('admin.post.edit')
            ->with('post',$post)
            ->with('categories',$categories)
            ->with('tags',$tags)
            ->with('my_tags',$my_tags);
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
        if ($request->file('image')) {
            # code...

            $this->validate($request,[
                'title' => 'required|max:100',
                'content' => 'required|min:10',
                'category_id' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png']);

            $file = $request->file('image');
            $name = $request->title . '-' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/post/';
            $file->move($path,$name);

            $post = Post::find($id);
            $post->fill($request->all());
            $post->save();

            $post->tags()->sync($request->tags);

            $image = Image::find($post->images[0]->id);
            $image->name = $name;
            $image->save();

            flash('Datos Editados','success');

            return redirect()->route('admin.post.show',$post);

        }else{

            $this->validate($request,[
                'title' => 'required|max:100',
                'content' => 'required|min:10',
                'category_id' => 'required',]);

            $post = Post::find($id);
            $post->fill($request->all());
            $post->save();

            $post->tags()->sync($request->tags);

            flash('Datos Editados','success');

            return redirect()->route('admin.post.show',$post);

        }
    }

    public function delete($id)
    {
        # code...
        $post = Post::find($id);
        return view('admin.post.delete')->with('post',$post);
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
        $post = Post::find($id);
        $post->delete();
        flash('Datos Eliminados','success');
        return redirect()->route('admin.post.index');
    }
}
