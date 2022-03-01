@extends('adminlte::page')

@section('title', 'Panel de administración')

@section('content_header')
<a href="{{ route('admin.empresas.create') }}" class="float-right btn btn-secondary btn-sm">Agregar Empresa</a>
    <h1>Listado de Empresas</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Celular CEO</th>
                    <th>Telefono Empresa</th>
                    <th>Direccion</th>
                    <th colspan="1"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($proessas as $proessa)
                        <tr>
                            <td>{{ $proessa->id }}</td>
                            <td>{{ $proessa->name }}</td>
                            <td>{{ $proessa->email }}</td>
                            <td>{{ $proessa->celular }}</td>
                            <td>{{ $proessa->telefono }}</td>
                            <td>{{ $proessa->direccion }}</td>

                        <td width="10px">
                            <a href="{{ route('admin.empresas.edit',$proessa->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('admin.empresas.destroy',$proessa->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
