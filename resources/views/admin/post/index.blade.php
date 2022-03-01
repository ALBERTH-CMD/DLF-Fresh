@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboar</h1>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <a href="{{route('admin.post.create')}}" class="btn btn-outline-success btn-sm">NUEVO</a>
            <table class="table table-striped">
                <thead>
                    <th>Orden</th>
                    <th>Nombre</th>
                    <th>Acción</th>
                </thead>
                <tbody>
                    @forelse ($posts as $item)
                    <tr>
                        <td>{{$item->orden}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>
                            <a href="{{ route('admin.post.edit',$item->id)}}" class="btn btn-outline-success btn-sm">EDITAR</a>
                            {!! Form::open(['method'=>'DELETE','route'=>['admin.post.destroy',$item->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('ELIMINAR',['class'=>'btn btn-success','onclick'=>'return confirm("ESTA SEGURO DE ELIMINAR")']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @empty

                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
