@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboar</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Listado de Archivos</div>

          <div class="card-body">
            <a href="{{ route('admin.uploads.create') }}" class="btn btn-outline-primary">subir Archivos</a>
            <br> <br>

            <table class="table">
              <tr>
                <th>Nombre de Empresa</th>
                <th>Download file</th>
                <th>Eliminar</th>
              </tr>
                @forelse($uploads as $upload)
                <tr>
                    <td>{{ $upload->title }}</td>
                    <td><a href="{{ route('admin.download',$upload->uuid) }}">{{ $upload->company_file }}</a></td>

                    <td width="10px">
                        <form action="{{ route('admin.uploads.destroy',$upload->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                </td>

                </tr>
                @empty
                <tr>
                    <td colspan="2">No books found</td>
                  </tr>
                @endforelse
            </table>
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
