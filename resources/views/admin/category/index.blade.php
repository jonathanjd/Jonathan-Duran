@extends('admin.base')

@section('title','Inicio-Category')

@section('title-content-1','Inicio-Category | Admin')

@section('title-content-2','Inicio-Category | Admin')

@section('content')


<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Tabla <small>Categoría</small></h2>
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

        @include('admin.message')


        <div class="x_content">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td><a class="btn btn-primary" href="{{ route('admin.category.show',$category) }}" data-toggle="tooltip" data-placement="bottom" title="Ver Categoría"><i class="fa fa-eye"></i></a></td>
                        <td><a class="btn btn-warning" href="{{ route('admin.category.edit',$category) }}" data-toggle="tooltip" data-placement="bottom" title="Editar Categoría"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="btn btn-danger" href="{{ route('admin.category.delete',$category) }}" data-toggle="tooltip" data-placement="bottom" title="Eliminar Categoría"><i class="fa fa-eraser"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <a class="btn btn-success" href="{{ route('admin.category.create') }}" data-toggle="tooltip" data-placement="bottom" title="Crear Categoría"><i class="fa fa-plus-circle"></i></a>
        <a class="btn btn-primary" href="{{ route('admin-index') }}" data-toggle="tooltip" data-placement="bottom" title="Inicio Admin"><i class="fa fa-home"></i></a>
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
@endsection
