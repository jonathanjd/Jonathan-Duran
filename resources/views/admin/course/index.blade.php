@extends('admin.base-main')

@section('title','Cursos | Inicio')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/bootstrap_file_field.css') }}">
  <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
@endsection

@section('title-content-1','Cursos')

@section('main_content')

<div id="app">
<div class="row">

<div class="col-md-6 col-sm-6 col-xs-12">

  @include('admin.message')

  <div>
      <a href="{{ route('admin.course.create') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Crear Curso"><i class="fa fa-plus-circle"></i></a>

      {{ $courses->links() }}
  </div>

    <div class="x_panel">
        <div class="x_title">
            <h2>Tabla Cursos <small>Nuestros Cursos De Programación Web Online</small></h2>
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
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Mostrar</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>

                  @foreach ($courses as $course)
                    <tr>
                        <th scope="row">{{ $course->id }}</th>
                        <td> <img src="{{ asset('course/'.$course->image) }}" alt="" class="img-responsive img-thumbnail"></td>
                        <td>{{ $course->name }}</td>
                        <td><a href="{{ route('admin.course.show',$course) }}" data-toggle="tooltip" data-placement="bottom" title="Ver" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
                        <td><a href="{{ route('admin.course.edit',$course) }}" data-toggle="tooltip" data-placement="bottom" title="Editar" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="{{ route('admin.course.delete',$course) }}" data-toggle="tooltip" data-placement="bottom" title="Eliminar" class="btn btn-danger"><i class="fa fa-eraser"></i></a></td>
                    </tr>
                  @endforeach

                </tbody>
            </table>

        </div>
    </div>

    <div>
      {{ $courses->links() }}
    </div>

    <div>
        <a href="{{ route('admin.course.create') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Crear Curso"><i class="fa fa-plus-circle"></i></a>
    </div>

</div>

</div>
</div>

@endsection
@section('script')
<script src="{{ asset('js/bootstrap_file_field.js') }}"></script>
<script src="{{ asset('js/parsley.js') }}"></script>
<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
@endsection
