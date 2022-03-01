<x-app-layout>
<div class="container pb-5 bg-warning">
    <div class="row">
        <h1 class="p-3 mt-5 text-center text-danger w-100">{{$post->nombre}}</h1>
        <img src="{{ asset('img/post/') }}/{{$post->urlfoto}}" class="mx-auto img-fluid d-block">



    </div>

    <div class="p-5 mt-5 mb-5 bg-white rounded-lg col-sm-12">
        {!!$post->descripcion!!}
        <hr>
        <p class="text-right small">Leido {{$post->visitas}} veces | Publicado {{$post->created_at->diffForHUmans()}}</p>


    </div>

</div>
</x-app-layout>
