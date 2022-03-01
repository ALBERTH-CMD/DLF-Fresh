@php
$i = 1;
$slots = [];
while(isset(${'slot_' . $i})) {
    $slots[]['content'] = ${'slot_' . $i};
    $i++;
}
$items = array_merge($items, $slots)
@endphp

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
                <a href="{{$item->link}}" class="btn btn-outline-danger">VER MÁS</a>
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
