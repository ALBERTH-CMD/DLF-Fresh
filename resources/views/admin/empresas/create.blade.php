@extends('adminlte::page')

@section('title', 'Panel de administración')

@section('content_header')
    <h1>Nueva Empresa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.empresas.store']) !!}
                <div class="form-group">
                    {!! Form::label('name','Nombre') !!}
                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Teclee el nombre de la Empresa']) !!}
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-group">
                    {!! Form::label('email','Email') !!}
                    {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Teclee el email de la Empresa']) !!}
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('celular','Celular de CEO') !!}
                    {!! Form::text('celular',null,['class'=>'form-control','placeholder'=>'Teclee el Celular del CEO de Empresa']) !!}
                    @error('celular')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('telefono','Telefono') !!}
                    {!! Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Teclee el Telefono de la Empresa']) !!}
                    @error('telefono')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('direccion','Direccion') !!}
                    {!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Teclee la Direccion de la Empresa']) !!}
                    @error('direccion')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {!! Form::submit('Crear Empresa',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
