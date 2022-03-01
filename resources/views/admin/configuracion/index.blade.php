@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboar</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10">

            {!! Form::open(['route'=>['admin.configuracion.update',$registro],'method'=>'PUT','files'=>true]) !!}


            <div class="jumbotron">
                <div class="form-group">
                    <label for="seo_title">INGRESE TITLE</label>
                    {!! Form::text('seo_title',$registro->seo_title,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>

                <div class="form-group">
                    <label for="seo_description">INGRESE DESCRIPTION</label>
                    {!! Form::textarea('seo_description',$registro->seo_description,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                </div>
                <div class="form-group">
                    <label for="seo_urlfoto">IMAGEN DESTACADA</label> <br>
                    <img src="{{ asset('img/configuracion') }}/{{$registro->seo_urlfoto}}">
                    {!! Form::file('seo_urlfoto') !!}
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="colorPrimario">COLOR PRIMARIO</label>
                    {!! Form::text('colorPrimario',$registro->colorPrimario,['class'=>'form-control','maxlength'=>'7']) !!}
                </div>

                <div class="col-sm-9">
                    <label for="urlfavicon">FAVICON</label> <br>
                    <img src="{{ asset('img/configuracion') }}/{{$registro->urlfavicon}}">
                    {!! Form::file('urlfavicon') !!}
                </div>
                <div class="col-sm-3">
                    <label for="colorsecundario">COLOR SECUNDARIO</label>
                    {!! Form::text('colorSecundario',$registro->colorSecundario,['class'=>'form-control','maxlength'=>'7']) !!}
                </div>
                <div class="col-sm-9">
                    <label for="urllogo">LOGO</label> <br>
                    <img src="{{ asset('img/configuracion') }}/{{$registro->urllogo}}">
                    {!! Form::file('urllogo') !!}
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="slogan">SLOGAN</label>
                    {!! Form::text('slogan',$registro->slogan,['class'=>'form-control','maxlength'=>'100']) !!}
                </div>
                <div class="col-sm-6">
                    <label for="frase_1">FRASE 1</label>
                    {!! Form::text('frase_1',$registro->frase_1,['class'=>'form-control','maxlength'=>'50']) !!}
                </div>
                <div class="col-sm-6">
                    <label for="frase_2">FRASE 2</label>
                    {!! Form::text('frase_2',$registro->frase_2,['class'=>'form-control','maxlength'=>'50']) !!}
                </div>

                <div class="col-sm-6">
                    <label for="frase_3">FRASE 3</label>
                    {!! Form::text('frase_3',$registro->frase_3,['class'=>'form-control','maxlength'=>'50']) !!}
                </div>
            </div>


            <div class="form-group row">

                <div class="col-sm-3">
                    <label for="razonsocial">RAZÓN SOCIAL</label>
                    {!! Form::text('razonsocial',$registro->razonsocial,['class'=>'form-control','maxlength'=>'50']) !!}
                </div>
                <div class="col-sm-3">
                    <label for="direccion">DIRECCIÓN</label>
                    {!! Form::text('direccion',$registro->direccion,['class'=>'form-control','maxlength'=>'50']) !!}
                </div>

                <div class="col-sm-3">
                    <label for="celular">CELULAR</label>
                    {!! Form::text('celular',$registro->celular,['class'=>'form-control','maxlength'=>'50']) !!}
                </div>
                <div class="col-sm-3">
                    <label for="email">EMAIL</label>
                    {!! Form::text('email',$registro->email,['class'=>'form-control','maxlength'=>'50']) !!}
                </div>
                <div class="col-sm-3">
                    <label for="facebook">FACEBOOK</label>
                    {!! Form::text('facebook',$registro->facebook,['class'=>'form-control','maxlength'=>'50']) !!}
                </div>
                <div class="col-sm-3">
                    <label for="youtube">YOUTUBE</label>
                    {!! Form::text('youtube',$registro->youtube,['class'=>'form-control','maxlength'=>'50']) !!}
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
