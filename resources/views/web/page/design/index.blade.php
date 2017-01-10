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
			<div class="col-md-8 col-md-offset-2">

        <h3 class="">{{ $diseño->name }}</h3>
        <p class="text-justify">{{ $diseño->content }}</p>

        <div class="">
          <a href="{{ asset('design/'.$diseño->image) }}" class="lightbox">
            <img class="img-responsive img-thumbnail center-block" src="{{ asset('design/'.$diseño->image) }}" alt="">
          </a>
        </div>

        <br>

        <div class="text-center">
          <a href="{{ $diseño->url }}" target="_blank" class="btn btn-primary">VER DEMO <i class="glyphicon glyphicon-eye-open"></i></a>
          <a href="{{ route('presupuesto.diseño.servicios',$diseño) }}" class="btn btn-success">PRESUPUESTO <i class="glyphicon glyphicon-file"></i></a>
        </div>

        <br>

        <hr>

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
