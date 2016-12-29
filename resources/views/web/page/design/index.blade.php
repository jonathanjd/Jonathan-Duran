@extends('web.page.design.base')

@section('title','Diseños')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/bootstrap-media-lightbox.css') }}">
@endsection

@section('content')

<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Diseños
                    <small>Nos enfocamos en diseños de páginas web limpias, bien estructuradas y de fácil navegación.</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
		
		@foreach($diseños as $diseño)
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">{{ $diseño->name }}</h3>
				  </div>
				  <div class="panel-body">
				   	
				   	<div class="row">
				   		<div class="col-md-4">
				   			<a href="{{ asset('design/'.$diseño->image) }}" class="lightbox">
			                    <img class="img-responsive img-rounded center-block" src="{{ asset('design/'.$diseño->image) }}" alt="" height="200" width="200">
			                </a>
			                
				   		</div>
				   		<div class="col-md-4">
				   			<p>
			                	{{ $diseño->content }}
			                </p>
				   		</div>
				   		<div class="col-md-4">
				   			<a href="{{ $diseño->url }}" target="_blank" class="btn btn-primary btn-block">VER DEMO</a>
				   			<a href="" class="btn btn-success btn-block">PRESUPUESTO</a>
				   		</div>
				   	</div>
				   	
	                

				  </div>
				</div>

				
			</div>
		</div>
		@endforeach
		
        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                {{ $diseños->links() }}
            </div>
        </div>
        <!-- /.row -->

@endsection

@section('script')
<script src="{{ asset('js/bootstrap-media-lightbox.js') }}"></script>
@endsection