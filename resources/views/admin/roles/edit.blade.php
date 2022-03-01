@extends('adminlte::page')

@section('title', 'Panel de administración')

@section('content_header')
    <h1>Editar rol</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body" style="color: black">
            {!! Form::model($role,['route'=>['admin.roles.update',$role],'method'=>'put']) !!}

            @include('admin.roles.partials._form')

            {!! Form::submit('Actualizar rol',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
