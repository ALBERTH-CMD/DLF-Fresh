<x-app-layout>

<div class="container pb-5 bg-warning">
    <div class="row">
        <h1 class="p-3 mt-5 text-danger">{{$producto->categoria->nombre}}{{$producto->nombre}}</h1>
        <img src="{{ asset('/img/producto') }}/{{$producto->urlfoto}}" class="img-fluid">

    </div>
    <div class="m-5 bg-white rounded-lg row">
        <div class="p-5 text-justify col-sm-9">
            {!!$producto->descripcion!!}
        </div>
        <div class="pt-5 pb-5 text-center text-white col-sm-3 bg-success">
            <div>
                <h2 class="">CONTACTO</h2>
                <hr>
                <p class="h2"><a href="https://api.whatsapp.com/send?phone={{$config->celular}}" class="btn btn-light btn-block"> WHATSAPP </a></p>
                <hr>
                <p class="h2"><a href="mailto:{{$config->email}}" class="btn btn-light btn-block">EMAIL</a></p>

            </div>

        </div>
    </div>

</div>
</x-app-layout>

