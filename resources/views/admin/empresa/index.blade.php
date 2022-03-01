@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de empresa</h1>
@stop

@section('content')
    <div class="card-body">
    <div class="row">
        <div class="col-sm-10">

            {!! Form::open(['route'=>['admin.empresa.update',$empresa],'method'=>'PUT','files'=>true]) !!}

            <div class="jumbotron">
                <div class="form-group">
                    <label for="title">INGRESE TITLE</label>
                    {!! Form::text('title',$empresa->title,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="description">INGRESE description</label>
                    {!! Form::textarea('description',$empresa->description,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                </div>

                <div class="form-group">
                    <label for="somos">SOMOS</label>
                    {!! Form::textarea('somos',$empresa->somos,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlsomos">IMAGEN SOMOS</label> <br>
                    <img src="{{ asset('/img/empresa') }}/{{$empresa->urlsomos}}">
                    {!! Form::file('urlsomos') !!}
                </div>

                <div class="form-group">
                    <label for="historia">HISTORIA</label>
                    {!! Form::textarea('historia',$empresa->historia,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlhistoria">IMAGEN HISTORIA</label> <br>
                    <img src="{{ asset('/img/empresa') }}/{{$empresa->urlhistoria}}">
                    {!! Form::file('urlhistoria') !!}
                </div>

                <div class="form-group">
                    <label for="mision">MISIÓN</label>
                    {!! Form::textarea('mision',$empresa->mision,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlmision">IMAGEN MISIÓN</label> <br>
                    <img src="{{ asset('/img/empresa') }}/{{$empresa->urlmision}}">
                    {!! Form::file('urlmision') !!}
                </div>


                <div class="form-group">
                    <label for="vision">VISIÓN</label>
                    {!! Form::textarea('vision',$empresa->vision,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlvision">IMAGEN VISIÓN</label> <br>
                    <img src="{{ asset('/img/empresa') }}/{{$empresa->urlvision}}">
                    {!! Form::file('urlvision') !!}
                </div>

                <div class="form-group">
                    <label for="valores">VALORES</label>
                    {!! Form::textarea('valores',$empresa->valores,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlvalores">IMAGEN VALORES</label> <br>
                    <img src="{{ asset('/img/empresa') }}/{{$empresa->urlvalores}}">
                    {!! Form::file('urlvalores') !!}
                </div>
            </div>
            {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
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
