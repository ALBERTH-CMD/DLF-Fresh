@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Subir archivos</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
      <div class="col-md-3">

          <div class="card-header">Subir Nuevo Archivo</div>

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
            <form action="{{ route('admin.uploads.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            Nombre:
            <br>
            <input type="text" name="title" placeholder="Ingrese el nombre de la Empresa" class="form-control">

            <br>

            Image/File:
            <br>
            <input type="file" name="company_file" id="">
            <br><br>

            <input type="submit" value="Subir Archivo" class="btn btn-outline-success">
            </form>
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
