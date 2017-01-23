@extends('admin.base-main')

@section('title','Inicio-Tag')

@section('title-content-1','Tag')

@section('main_content')

<div class="app">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">

			@include('admin.message')

			<a href="{{ route('admin.tag.create') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Crear Tag"><i class="fa fa-plus-circle"></i></a>

      		{{ $tags->links() }}

			<div class="x_panel">
				<div class="x_title">
					<h2>Tabla <small>Lista de Tag</small></h2>
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
		                        <th>#</th>
		                        <th>Name</th>
		                        <th>Mostrar</th>
		                        <th>Editar</th>
		                        <th>Eliminar</th>
		                    </tr>
		                </thead>
		                <tbody>
						    
		                    @foreach ($tags as $tag)
		                    <tr>
		                        <th scope="row">{{ $tag->id }}</th>
		                        
		                        <td>{{ $tag->name }}</td>
		                        <td><a href="{{ route('admin.tag.show',$tag) }}" data-toggle="tooltip" data-placement="bottom" title="Ver" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
		                        <td><a href="{{ route('admin.tag.edit',$tag) }}" data-toggle="tooltip" data-placement="bottom" title="Editar" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a></td>
		                        <td><a href="{{ route('admin.tag.delete',$tag) }}" data-toggle="tooltip" data-placement="bottom" title="Eliminar" class="btn btn-danger"><i class="fa fa-eraser"></i></a></td>
		                    </tr>
		                  @endforeach

		                </tbody>
		            </table>
					
				</div>
			</div>
			
			{{ $tags->links() }}

			<a href="{{ route('admin.tag.create') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Crear Tag"><i class="fa fa-plus-circle"></i></a>

		</div>
	</div>
</div>

@endsection