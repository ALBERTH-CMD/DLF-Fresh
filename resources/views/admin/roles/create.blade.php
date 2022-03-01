@extends('adminlte::page')

@section('title', 'Panel de administración')

@section('content_header')
    <h1>Crear nuevo rol</h1>
@stop

@section('content')
    <div class="card" style="color: black">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.roles.store']) !!}

            @include('admin.roles.partials._form')

            {!! Form::submit('Crear rol',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
