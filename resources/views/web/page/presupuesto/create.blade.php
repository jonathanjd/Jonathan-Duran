@extends('web.page.presupuesto.base')

@section('title','Crear-Presupuesto')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
@endsection

@section('content')
	<!-- Page Heading -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Presupuesto
                    <small>Servicios...</small>
                </h1>
            </div>
        </div>
<!-- /.row -->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Formulario</h3>
				</div>
				<div class="panel-body">

					<!-- Mi Diseño Start-->
					<div class="col-md-6">
						<div>
							<h3 class="text-center">Mi Diseño</h3>
						</div>
						<div>
							<img src="{{ asset('design/'.$design->image) }}" alt="" class="img-responsive img-thumbnail">
						</div>
						<div>
							<p class="text-center"><strong>{{ $design->name }}</strong></p>
						</div>
					</div>
					<!-- Mi Diseño End-->

					<!-- Servicios Start-->
					<div class="col-md-6">

            <div>

              @if(count($errors) > 0)
              <div class="alert alert-dismissible alert-danger">
                <ul>
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
              @foreach($errors->all() as $error)
                <li>
                 {{ $error }}
                </li>
              @endforeach
                </ul>
              </div>
              @endif

            </div>

						<div id="app">

							<h3 class="text-center">Servicios</h3>
							{!! Form::open(['route' => ['presupuesto.diseño.servicios.datos.create',$design->id],'method' => 'POST','data-parsley-validate' => '']) !!}
							@foreach ($services as $service)
								@if ($service->id == 5)
									<p class="text-left"> <i class="glyphicon glyphicon-globe"></i> <strong>{{ $service->name }}</strong></p>
									<p class="text-justify"><i class="glyphicon glyphicon-list"></i><strong> Descripción:</strong> {{ $service->description }}</p>
									<p class="text-left"> <i class="glyphicon glyphicon-usd"></i> <strong>Costo:</strong>{{ $service->price }} BsF</p>
									<hr>
								@endif

								@if ($service->id == 8)

									<p class="text-left"><i class="glyphicon glyphicon-hdd"></i> <strong> {{ $service->name }}</strong></p>
									<p class="text-justify"><i class="glyphicon glyphicon-list"></i><strong> Descripción:</strong> {{ $service->description }}</p>
									<p class="text-left"> <i class="glyphicon glyphicon-usd"></i> <strong>Costo: {{ $service->price }} BsF</strong></p>
									<hr>
								@endif

								@if ($service->id == 7)

									<p class="text-left"><i class="glyphicon glyphicon-list-alt"></i> <strong> {{ $service->name }}</strong></p>
									<p class="text-justify"><i class="glyphicon glyphicon-list"></i><strong> Descripción:</strong> {{ $service->description }}</p>
									<p class="text-left"> <i class="glyphicon glyphicon-usd"></i> <strong>Costo: {{ $service->price }} BsF</strong></p>
									@if ($service->available == 1)
										<div class="form-group">
										{!! Form::label('blog-noticia','Agregar Sección de Blog/Noticia?') !!}
										{!! Form::select('blog', ['si' => 'Si', 'no' => 'No'], 'no',['class' => 'form-control','v-model' =>'selectedBlog']) !!}
										</div>
									@else
										<div class="form-group has-error">
										{!! Form::label('blog-noticia','Agregar Sección de Blog/Noticia?',['class' => 'control-label','for' => 'inputError1']) !!}
										{!! Form::select('blog', ['no' => 'No'], 'no',['class' => 'form-control','v-model' =>'selectedBlog']) !!}
                    <br>
                    <span class="label label-danger">* SERVICIO NO DISPONIBLE</span>
                    </div>
									@endif


									<hr>
								@endif

								@if ($service->id == 6)

									<p class="text-left"><i class="glyphicon glyphicon-shopping-cart"></i> <strong> {{ $service->name }}</strong></p>
									<p class="text-justify"><i class="glyphicon glyphicon-list"></i><strong> Descripción:</strong> {{ $service->description }}</p>
									<p class="text-left"> <i class="glyphicon glyphicon-usd"></i> <strong>Costo: {{ $service->price }} BsF</strong></p>
									@if ($service->available == 1)
										<div class="form-group">
										{!! Form::label('blog-noticia','Agregar Sección de Carrito de Compras?') !!}
										{!! Form::select('car', ['si' => 'Si', 'no' => 'No'], 'no',['class' => 'form-control','v-model' =>'selectedCar']) !!}
										</div>
									@else
										<div class="form-group has-error">
										{!! Form::label('blog-noticia','Agregar Sección de Carrito de Compras?',['class' => 'control-label','for' => 'inputError1']) !!}
										{!! Form::select('car', ['no' => 'No'], 'no',['class' => 'form-control','v-model' =>'selectedCar']) !!}
                    <br>
                    <span class="label label-danger">* SERVICIO NO DISPONIBLE</span>
										</div>
									@endif


									<hr>
								@endif

							@endforeach

              <div class="form-group text-center">
                {!! Form::label('TOTAL A PAGAR') !!}
                <br>
                <p class="label label-success">@{{ presupuesto_total }} BsF</p>
              </div>
              <hr>
              <div class="text-center">
                <h3>Datos Clientes</h3>
              </div>

              <div class="form-group">
                {!! Form::label('Nombre Cliente:') !!}
                {!! Form::text('customer',null,['class' => 'form-control', 'required' => '','data-parsley-length' => '[5,50]']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('Correo Cliente:') !!}
                {!! Form::text('email',null,['class' => 'form-control', 'required' => '','data-parsley-length' => '[5,50]','data-parsley-type' =>'email']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('Mensaje Cliente:') !!}
                {!! Form::textarea('message',null,['class' => 'form-control','data-parsley-length' => '[10,1000]']) !!}
              </div>

							<div class="form-group">
								{!! Form::submit('Crear Presupuesto',['class' => 'form-control btn-success']) !!}
							</div>


							{!! Form::close() !!}
						</div>
					</div>
					<!-- Servicios End -->
				</div>
			</div>
		</div>
	</div>
@stop

@section('script')
  <script src="{{ asset('js/parsley.js') }}"></script>
  <script src="{{ asset('js/vendor.js') }}"></script>
  <script src="{{ asset('js/vue/vue-presupuesto.js') }}"></script>
@endsection
