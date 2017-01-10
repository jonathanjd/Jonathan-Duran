@extends('web.page.presupuesto.base')

@section('title','Presupuesto')

@section('content')

<!-- Page Heading -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @include('admin.message')

                <h1 class="page-header">Presupuesto
                    <small>Seleccione un Diseño...</small>
                </h1>
            </div>
        </div>
<!-- /.row -->

		<div class="row">
			<div class="col-md-8 col-md-offset-2">

						@foreach ($designs as $design)

              <div class="row">
                <div class="col-md-6">
                  <div>
                    <h3 class="text-left">{{ $design->name }}</h3>
                    <p class="text-justify">{{ $design->content }}</p>
                  </div>

                  <div class="form-group">
										<a href="{{ $design->url }}" class="btn btn-info btn-block" target="_blank">Ver Demo <i class="glyphicon glyphicon-eye-open"></i></a>
									</div>
									<div class="form-group">
										<a href="{{ route('presupuesto.diseño.servicios',$design) }}" class="btn btn-success btn-block">Seleccionar <i class="glyphicon glyphicon-ok-circle"></i></a>
									</div>
                </div>
                <div class="col-md-6 imagen-diseño">
                  	<img src="{{ asset('design/'.$design->image) }}" alt="" class="img-responsive img-thumbnail center-block">
                </div>
              </div>

              <br>
              <hr>

						@endforeach



                <!-- Pagination Start-->
      					<div class="text-center">
      						{{ $designs->links() }}
      					</div>
      					<!-- Pagination End -->


			</div>

		</div>

@endsection
