@extends('admin.base')

@section('title','Editar-Service')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/bootstrap_file_field.css') }}">
<link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
@endsection

@section('title-content-1','Editar-Service | Admin')

@section('title-content-2','Servicio')

@section('content')

<div class="row">
	
	<div class="col-md-6 col-xs-12">
    <div class="x_panel">
  <div class="x_title">
    <h2>Form Service <small>Editar</small></h2>
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
    <br />

    @include('admin.message-error')

    {!! Form::open(['route' => ['admin.service.update',$service],'method' => 'PUT','class' => 'form-horizontal form-label-left input_mask','files' => true,'data-parsley-validate' => '']) !!}

      <div class="form-group">
        <img src="{{ asset('service/'.$service->image) }}" alt="" class="img-responsive img-thumbnail center-block" height="150" width="300">
      </div>

      <div class="form-group">
        {!! Form::label('name','Name Service:') !!}
        {!! Form::text('name',$service->name,['class' => 'form-control','placeholder' => 'Name Service','required' => '','data-parsley-length' => '[3,50]']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('description','Description Service:') !!}
        {!! Form::textarea('description',$service->description,['class' => 'form-control', 'placeholder' => 'Description Service', 'required' => '','data-parsley-length' => '[10,1000]']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('price','Price Service:') !!}
        {!! Form::text('price',$service->price,['class' => 'form-control','placeholder' => 'Price Service','required' => '','data-parsley-range' => '[0,1000000]','data-parsley-type' => 'integer']) !!}
      </div>
      
      <div class="form-group">
        {!! Form::label('Image','Image Service:') !!}
        {!! Form::file('image',['data-field-type' => 'bootstrap-file-filed','data-preview' => 'on','data-file-types' => 'image/jpeg,image/png,image/gif','data-btn-class' => 'btn-primary']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('available','Disponible?') !!}
        {!! Form::select('available', ['1' => 'Si', '0' => 'No '], $service->available,['class' => 'form-control']) !!}
      </div>
    
      <div class="form-group">
        <div class="col-md-9 col-sm-9 col-xs-12">
          <a href="{{ route('admin.service.index') }}" class="btn btn-primary">Regresar</a>
          <button type="submit" class="btn btn-success">Editar</button>
        </div>
      </div>

    </form>
    {!! Form::close() !!}
  </div>
</div>
  </div>

</div>

	

</div>

@endsection

@section('script')
<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>

<script src="{{ asset('js/bootstrap_file_field.js') }}"></script>
<script src="{{ asset('js/parsley.js') }}"></script>
@endsection
