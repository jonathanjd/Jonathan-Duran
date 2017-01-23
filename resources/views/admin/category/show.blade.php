@extends('admin.base-main')

@section('title','Show-Category')

@section('title-content-1','Show-Category | Admin')

@section('main_content')

<div class="app">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">

			<a href="{{ route('admin.category.index') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

			@include('admin.message')
			
			<div class="x_panel">
				<div class="x_title">
					<h2>Tabla Category <small>Nuestra Categoría de Blog</small></h2>
			            <ul class="nav navbar-right panel_toolbox">
			                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
			                </li>
			                <li class="dropdown">
			                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
			                    <ul class="dropdown-menu" role="menu">
			                        <li><a href="#">Settings 1</a>
			                        </li>
			                        <li><a href="#">Settings 2</a>
			                        </li>
			                    </ul>
			                </li>
			                <li><a class="close-link"><i class="fa fa-close"></i></a>
			                </li>
			            </ul>
			        <div class="clearfix"></div>
				</div>
				<div class="x_content">
					<h3>Datos:</h3>

			        <p><strong>ID:</strong> {{ $category->id }}</p>

			        <p><strong>Name:</strong> {{ $category->name }}</p>

				</div>
			</div>

			<a href="{{ route('admin.category.index') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

		</div>
	</div>	
</div>



@endsection
