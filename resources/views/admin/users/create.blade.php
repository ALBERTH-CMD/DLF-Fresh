@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboar</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                {!! Form::label('name','Usuario') !!}
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre de Usuario']) !!}
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <div class="form-group">
                {!! Form::label('proessa_id','Empresa') !!}
                {!! Form::select('proessa_id',$proessas,null ,['class'=>'form-control','placeholder'=>'Seleccione la Empresa Del Usuario']) !!}
                @error('proessa_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('status','Status') !!}
                {!! Form::select('status',['Activo'=>'Activo','Inactivo'=>'inactivo'],null,['class'=>'form-control','placeholder'=>'Selecciona el Estado de Usuario']) !!}
                @error('status')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('email','Email') !!}
                {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Teclee el Email del Usuario']) !!}
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <div class="form-group">
                {!! Form::label('password','Contraseña') !!}
                {!! Form::text('password',null,['class'=>'form-control','placeholder'=>'Teclee la Contraseña del Usuario']) !!}
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            {!! Form::submit('Crear Usuario',['class'=>'btn btn-outline-primary']) !!}
        {!! Form::close() !!}
    </form>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
