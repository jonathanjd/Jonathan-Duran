@extends('admin.base-main')

@section('title','Mostrar-Plan')

@section('title-content-1','Plan')

@section('main_content')

<div class="app">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">

            <a href="{{ route('admin.plan.index') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

            @include('admin.message')

			<div class="x_panel">
				<div class="x_title">
					<h2>Tabla Plan<small>Mostrar Plan</small></h2>
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

          <h3>{{ $plan->name }}</h3>
          <p>Precio: <strong>{{ $plan->price }} BsF</strong></p>
          <p>Tiempo Estimado: <strong>{{ $plan->time }}</strong></p>
          <p>Categoría: <strong>{{ $plan->service->name }}</strong></p>

          <hr>

          <h3 class="text-center">Features</h3>

          @if ($features->count())
            <ul>
              @foreach ($features as $feature)

                <li>{{ $feature->description }}
                  {!! Form::open(['route' => ['admin.feature.destroy',$feature],'method' => 'DELETE']) !!}
                  <button type="submit" class="btn btn-danger btn-round btn-sm" data-toggle="tooltip" data-placement="bottom" title="Eliminar Feature"><i class="fa fa-trash-o"></i></button>
                  {!! Form::close() !!}
                </li>

              @endforeach
            </ul>
          @else
            <p><strong>No Tiene</strong></p>
          @endif

				</div>
			</div>



		</div>
	</div>

  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Form Feacture <small>Crear</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">#</a>
                  </li>
                  <li><a href="#">#</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          @include('admin.message-error')

          {!! Form::open(['route' => 'admin.feature.store','method' => 'POST','class' => 'form-horizontal form-label-left input_mask','data-parsley-validate' => '']) !!}

          <div class="form-group">
            {!! Form::label('description','Description Plan:') !!}
            {!! Form::hidden('type_service_id',$plan->id) !!}
            {!! Form::text('description',null,['class' => 'form-control','placeholder' => 'Description Plan','required' => '','data-parsley-length' => '[3,120]']) !!}
          </div>

          <div class="form-group">
              <button type="submit" class="btn btn-success btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar"><i class="fa fa-save"></i></button>
          </div>

          {!! Form::close() !!}

        </div>
      </div>
			<a href="{{ route('admin.plan.index') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>
    </div>
  </div>

</div>

@endsection
