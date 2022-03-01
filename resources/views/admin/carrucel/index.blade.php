@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Carrusel</h1>
@stop

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-sm-10">
            <a href="{{route('admin.carrucel.create')}}" class="btn btn-outline-success btn-sm">NUEVO</a>
            <table class="table table-striped">
                <thead>
                    <th>Orden</th>
                    <th>Imagen</th>
                    <th>Acción</th>
                </thead>
                <tbody>
                    @forelse ($carrusels as $item)
                    <tr>
                        <td>{{$item->orden}}</td>
                        <td><img src="{{ asset('/img/carrusel') }}/{{$item->urlfoto}}" width="300"></td>
                        <td>
                            <a href="{{ route('admin.carrucel.edit',$item->id)}}" class="btn btn-success">EDITAR</a>
                            {!! Form::open(['method'=>'DELETE','route'=>['admin.carrucel.destroy',$item->id],'style'=>'display:inline']) !!}
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
