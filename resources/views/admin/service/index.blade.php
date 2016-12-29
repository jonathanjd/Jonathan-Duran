@extends('admin.base')

@section('title','Inicio-Service')

@section('title-content-1','Inicio-Service | Admin')

@section('title-content-2','Servicio')

@section('content')

@include('admin.message')

        <div class="x_content">
        <a class="btn btn-success btn-block" href="{{ route('admin.service.create') }}" data-toggle="tooltip" data-placement="bottom" title="Crear Service"><i class="fa fa-plus-circle"></i></a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>IMAGE</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>PRECIO</th>
                        <th>DISPONIBLE</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>
                                <img src="{{ asset('service/'.$service->image) }}" alt="..." class="img-responsive img-thumbnail center-block" height="150" width="150">
                        </td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->price }}</td>
                        <td>
                        @if($service->available == 1)
                        <span class="label label-success center-block">Si</span>
                        @else
                        <span class="label label-danger center-block">No</span>
                        @endif
                        </td>
                        <td><a class="btn btn-warning" href="{{ route('admin.service.edit', $service) }}" data-toggle="tooltip" data-placement="bottom" title="Editar Servicio"><i class="fa fa-pencil"></i></a></td>
                        <td>
                        {!! Form::open(['route' => ['admin.service.destroy',$service],'method' => 'DELETE']) !!}
                        
                        <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Eliminar Servicio"><i class="fa fa-eraser"></i></button>
                        {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $services->links() }}

            <a class="btn btn-success btn-block" href="{{ route('admin.service.create') }}" data-toggle="tooltip" data-placement="bottom" title="Crear Servicio"><i class="fa fa-plus-circle"></i></a>
        </div>




@endsection

@section('script')
<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
@endsection
