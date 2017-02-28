@extends('admin.base-main')

@section('title','Social')

@section('title-content-1','Social Admin')

@section('main_content')

  <div class="row">

      <div class="col-md-6">
        <div class="x_panel">
          <div class="x_title">
              <h2>Mis Datos<small> Social</small></h2>
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
          <div class="x_content" id="vue-social">

            <div v-if="mensajeSuccess" role="alert" class="alert alert-success alert-dismissible">
              <button v-on:click="cerrarMensaje" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
              <strong>Excelente!</strong> Datos Guardado con éxito.
            </div>


            <h3 class="text-center">Formulario</h3>
            {!! Form::open(['method' => 'POST','@submit' => 'onSubmitForm']) !!}

            <div class="form-group">
              {!! Form::label('correo','Correo:',['class' => 'control-label']) !!}
              {!! Form::text('correo', null,['class' => 'form-control', 'v-model' => 'social.correo','type' => 'email']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('facebook','Facebook:',['class' => 'control-label']) !!}
              {!! Form::text('facebook', null,['class' => 'form-control', 'v-model' => 'social.facebook']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('twitter','Twitter:',['class' => 'control-label']) !!}
              {!! Form::text('twitter', null,['class' => 'form-control', 'v-model' => 'social.twitter']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('youtube','Youtube:',['class' => 'control-label']) !!}
              {!! Form::text('youtube', null,['class' => 'form-control', 'v-model' => 'social.youtube']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('google','Google:',['class' => 'control-label']) !!}
              {!! Form::text('google', null,['class' => 'form-control', 'v-model' => 'social.google']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('linkedin','Linkedin:',['class' => 'control-label']) !!}
              {!! Form::text('linkedin', null,['class' => 'form-control', 'v-model' => 'social.linkedin']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('pinterest','Pinterest:',['class' => 'control-label']) !!}
              {!! Form::text('pinterest', null,['class' => 'form-control', 'v-model' => 'social.pinterest']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('instagram','Instagram:',['class' => 'control-label']) !!}
              {!! Form::text('instagram', null,['class' => 'form-control', 'v-model' => 'social.instagram']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('tumblr','Tumblr:',['class' => 'control-label']) !!}
              {!! Form::text('tumblr', null,['class' => 'form-control', 'v-model' => 'social.tumblr']) !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Guardar',['class' => 'btn btn-success btn-block','data-toggle' => 'tooltip','data-placement' => 'bottom','title' => 'Guardar','v-if' => 'mostrarSubmit']) !!}
              {!! Form::submit('Guardar',['class' => 'btn btn-success btn-block','data-toggle' => 'tooltip','data-placement' => 'bottom','title' => 'Guardar','v-else','disabled' => 'disabled']) !!}


            </div>

            {!! Form::close() !!}
          </div>
        </div>
      </div>
  </div>


@endsection
@section('script')
<script src="{{ asset('js/vue/vue-social-admin.js') }}"></script>
<script src="{{ asset('js/parsley.js') }}"></script>
@endsection
