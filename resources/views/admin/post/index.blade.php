@extends('admin.base-main')

@section('title','Inicio Post')

@section('title-content-1','Post')

@section('main_content')

<div class="app">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">

			@include('admin.message')

			<a href="{{ route('admin.post.create') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Crear Post"><i class="fa fa-plus-circle"></i></a>

			{{ $posts->links() }}

			<div class="x_panel">
				<div class="x_title">
					<h2>Tabla <small>Lista de Post</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Opción 1</a>
                                    </li>
                                    <li><a href="#">Opción 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                    <div class="clearfix"></div>
				</div>
				<div class="x_content">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Creado Por</th>
                                <th>Fecha Creación</th>
                                <th>Mostrar</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td>{{ $post->title }}</td>
                                <th>{{ $post->category->name }}</th>
                                <th>{{ $post->user->name }}</th>
                                <th>{{ $post->created_at->diffForHumans() }}</th>
                                <td><a class="btn btn-primary" href="{{ route('admin.post.show',$post) }}" data-toggle="tooltip" data-placement="bottom" title="Ver Post"><i class="fa fa-eye"></i></a></td>
                                <td><a class="btn btn-warning" href="{{ route('admin.post.edit',$post) }}" data-toggle="tooltip" data-placement="bottom" title="Editar Post"><i class="fa fa-pencil"></i></a></td>
                                <td><a class="btn btn-danger" href="{{ route('admin.post.delete',$post) }}" data-toggle="tooltip" data-placement="bottom" title="Eliminar Post"><i class="fa fa-eraser"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
					
				</div>
			</div>

			{{ $posts->links() }}

			<a href="{{ route('admin.post.create') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Crear Post"><i class="fa fa-plus-circle"></i></a>
			
		</div>
	</div>
</div>

@endsection