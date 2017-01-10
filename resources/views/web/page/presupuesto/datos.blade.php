@extends('web.page.presupuesto.base')

@section('title','Datos-Presupuesto')

@section('content')
	<!-- Page Heading -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Presupuesto
                    <small>Datos...</small>
                </h1>
            </div>
        </div>
<!-- /.row -->
	<div class="row">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Crear Presupuesto</h3>
			</div>
			<div class="panel-body">
				<div class="col-md-4">
					<div class="text-center">
						<h3>Mi Diseño</h3>
						<span class="label label-primary">{{ $design->name }}</span>
					</div>
					<div>
						<img src="{{ asset('design/'.$design->image) }}" alt="" class="img-responsive img-thumbnail">
					</div>
				</div>
			</div>
		</div>
	</div>
@stop