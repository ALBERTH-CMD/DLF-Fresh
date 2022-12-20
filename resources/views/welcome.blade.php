<x-app-layout>
    <div class="p-0 container-fluid">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @forelse ($carrusel as $item)
                <li data-target="#carouselExampleCaptions" data-slide-to="{{$item->orden}}" class="@if($loop->index==0) active @endif"></li>
                @empty
                @endforelse
            </ol>
            <div class="carousel-inner">
            @forelse ($carrusel as $item)
              <div class="carousel-item @if($loop->index==0) active @endif">
                <img src="{{ asset('/img/carrusel') }}/{{$item->urlfoto}}" class="d-block w-100" alt="{{$item->frase}}">
                <div class="pb-5 carousel-caption d-none d-md-block">
                    <h5>{{$item->descripcion}}</h5>
                    <a href="{{$item->link}}" target="_Blank" class="btn btn-outline-danger">VER MÁS</a>
                </div>
              </div>
            @empty
            @endforelse

            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

    </div>
    <div class="container-fluid bg-warning">
            <h1 class="pt-5 pb-5 text-center text-white">{{$config->slogan}}</h1>
            <div class="container pb-1">
                <div class="mt-5 mb-5 text-center text-white row justify-content-center lead">

                    <div class="col-sm-3"><p>{{$config->frase_1}}</p></div>
                    <div class="col-sm-3"><p>{{$config->frase_2}}</p></div>
                    <div class="col-sm-3"><p>{{$config->frase_3}}</p></div>

                    <div class="mt-5 text-center col-sm-12">
                        <a href="artesanias" class="btn btn-outline-danger">VER PROYECTOS</a>
                    </div>
                </div>
            </div>
    </div>

    <!-- artesanias -->

    <div class="mt-5 max-w-md mx-auto bg-blue-100 rounded-xl shadow-2xl overflow-hidden md:max-w-2xl">
        <div class="md:flex">
          <div class="md:shrink-0">
            <p class="md:w-48 text-center">CONTACTO <br> {{$config->celular}}</p>
          </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold text-center">PROYECTOS ACTUALES Y A FUTURO</div>
                @forelse ($producto as $item)
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="artesanias/{{$item->categoria->slug}}/{{$item->slug}}">
                                <img src="{{ asset('/img/producto') }}/{{$item->urlfoto}}" class="card-img-top" alt="{{$item->nombre}}">
                            </a>
                        </div>
                        <div class="card-footer">
                            <a href="artesanias/{{$item->categoria->slug}}/{{$item->slug}}" class="btn btn-outline-warning btn-block">{{$item->nombre}}</a>
                        </div>
                    </div>
                    @empty
                @endforelse

            </div>
        </div>
    </div>
    <!-- artesanias /-->
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------/-->
    <!-- publicaciones-->
    <div class="max-w-md mx-auto mt-5 overflow-hidden bg-white shadow-2xl rounded-xl md:max-w-2xl">
        @foreach ($posts as $r)

            <div class="md:flex">
                <div class="md:shrink-0">
                <img class="object-cover w-full h-85 md:h-full md:w-150" src="{{ asset('/img/post') }}/{{$r->urlfoto}}" alt="{{$r->nombre}}">
                </div>
                <div class="p-8">
                <div class="text-sm font-semibold tracking-wide text-indigo-500 uppercase">{{$r->nombre}}</div>
                <p class="mt-2 text-gray-500">{{$r->description}}</p>
                <span class="small">{{$r->created_at->diffForHumans()}}</span>
                </div>
            </div>
        @endforeach
    </div>
    <!-- publicaciones/-->

</x-app-layout>
