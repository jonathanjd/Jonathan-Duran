@extends('admin.base-main')

@section('title','Editar Post')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/bootstrap_file_field.css') }}">
<link rel="stylesheet" href="{{ asset('css/parsley.css') }}">

@endsection

@section('title-content-1','Post')

@section('main_content')

<div class="app">
	<div class="row">
		<div class="col-md-10 col-sm-10 col-xs-12">

			<a href="{{ route('admin.post.index') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

			<div class="x_panel">
				<div class="x_title">
					<h2>Formulario de Post<small>Eidtar Post</small></h2>
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

                @include('admin.message-error')

                  {!! Form::open(['route' => ['admin.post.update',$post],'method' => 'PUT','class' => 'form-horizontal form-label-left input_mask','files' => true,'data-parsley-validate' => '']) !!}

                    <div>
                        <img class="img-responsive img-thumbnail center-block" src="{{ asset('post/'.$post->images[0]->name) }}" alt="" height="350" width="350">
                    </div>

                    <div class="form-group">
                      {!! Form::label('title','Title:') !!}
                      {!! Form::text('title',$post->title,['class' => 'form-control','placeholder' => 'Ingrese Name','required' => '','data-parsley-length' => '[5,50]']) !!}
                    </div>

                    <div class="form-group">

                        {!! Form::label('categoria','Categoría') !!}
                        {!! Form::select('category_id', $categories, $post->category->id,['class' => 'form-control']); !!}

                    </div>

                    <div class="form-group">

                        {!! Form::label('Seleccione Tags') !!}
                        {!! Form::select('tags[]', $tags, $my_tags, ['class' => 'select2_multiple form-control','multiple','required']) !!}

                    </div>

                    <div class="form-group">
                      {!! Form::label('content','Content:') !!}
                      {!! Form::textarea('content',$post->content,['class' => 'form-control textarea-content', 'placeholder' => 'Ingrese Content', 'required' => '','minlength' => '10']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('Image','Image:') !!}
                      {!! Form::file('image',['data-field-type' => 'bootstrap-file-filed','data-preview' => 'on','data-file-types' => 'image/jpeg,image/png,image/gif','data-btn-class' => 'btn-primary']) !!}
                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-success btn-block" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fa fa-save"></i></button>

                    </div>

                  {!! Form::close() !!}

				</div>
			</div>

			<a href="{{ route('admin.post.index') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

		</div>
	</div>
</div>

@endsection

@section('script')

    <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Seleccione Tags",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 6,
          placeholder: "Seleccione Tags(Max:6)",
          allowClear: true
        });
      });

      console.log(select2-selection__rendered());
    </script>
    <!-- /Select2 -->

    <script src="{{ asset('js/bootstrap_file_field.js') }}"></script>
    <script src="{{ asset('js/parsley.js') }}"></script>
		<script src="http://cloud.tinymce.com/stable/tinymce.min.js?apiKey=55t6ildkigxrvqaf9lti3kmza3gh1j6iarkp51kpikf3snrn"></script>
		<script type="text/javascript">
			tinymce.init({ selector:'textarea' });
		</script>

@endsection
