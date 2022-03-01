@extends('adminlte::page')

@section('title', 'Panel de administración')

@section('content_header')
    <h1>Editar el Empresa</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($proessas,['route'=>['admin.empresas.update',$proessas->id],'method'=>'PUT']) !!}
            <div class="form-group">
                {!! Form::label('name','Nombre') !!}
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Teclee el nombre del Proveedor']) !!}
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('email','Email') !!}
                {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Teclee el email de Proveedor']) !!}
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('celular','Celular') !!}
                {!! Form::text('celular',null,['class'=>'form-control','placeholder'=>'Teclee el Telefono de Proveedor']) !!}
                @error('celular')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('telefono','Celular') !!}
                {!! Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Teclee el Telefono de Proveedor']) !!}
                @error('telefono')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('direccion','Direccion') !!}
                {!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Teclee el Telefono de Proveedor']) !!}
                @error('direccion')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            {!! Form::submit('Actualizar cliente',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
