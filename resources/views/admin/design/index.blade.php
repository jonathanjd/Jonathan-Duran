@extends('admin.base')

@section('title','Inicio-Design')

@section('title-content-1','Inicio-Design | Admin')

@section('title-content-2','Diseño')

@section('content')


        @include('admin.message')

        <div class="x_content">
        <a class="btn btn-success btn-block" href="{{ route('admin.design.create') }}" data-toggle="tooltip" data-placement="bottom" title="Crear Diseño"><i class="fa fa-plus-circle"></i></a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>IMAGE</th>
                        <th>NAME</th>
                        <th>URL</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($designs as $design)
                    <tr>
                        <td>{{ $design->id }}</td>
                        <td>
                        		<img src="{{ asset('design/'.$design->image) }}" alt="..." class="img-responsive img-thumbnail center-block" height="150" width="150">
                        </td>
                        <td>{{ $design->name }}</td>
                        <td>
                        <a href="{{ $design->url }}" target="_blank">Ver Demo</a>
                        </td>
                        <td><a class="btn btn-warning" href="{{ route('admin.design.edit', $design) }}" data-toggle="tooltip" data-placement="bottom" title="Editar Diseño"><i class="fa fa-pencil"></i></a></td>
                        <td>
                        {!! Form::open(['route' => ['admin.design.destroy',$design],'method' => 'DELETE']) !!}
                        
                        <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Eliminar Diseño"><i class="fa fa-eraser"></i></button>
                        {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $designs->links() }}
        	<a class="btn btn-success btn-block" href="{{ route('admin.design.create') }}" data-toggle="tooltip" data-placement="bottom" title="Crear Diseño"><i class="fa fa-plus-circle"></i></a>
        </div>





@endsection

@section('script')
<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
@endsection
