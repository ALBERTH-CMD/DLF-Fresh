@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ediatr File</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Archivos</div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-body">
                    {!! Form::model($uploads,['route'=>['admin.uploads.update',$uploads->id],'method'=>'post','enctype'=>'multipart/form-data']) !!}
                   


                    Title:
                    <br>
                    <input type="text" name="title" class="form-control" value="{{ $uploads->title }}">

                    <br>

                    Image/File:
                    <br>
                    <input type="file" name="company_file" id="">
                    <br><br>

                    {!! Form::submit('Actualizar Archivo',['class'=>'btn btn-outline-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
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
