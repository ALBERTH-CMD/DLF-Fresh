<x-app-layout>
<div>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 overflow-hidden bg-blue-200 shadow-2xl sm:rounded-lg">
                <h1 class="text-center text-gray-900 text-xl font-medium mb-2">{{$categoria->nombre}}</h1>
                <div class="flex justify-center">
                    <img class="rounded-t-lg" src="{{ asset('img/categoria') }}/{{$categoria->urlfoto}}" alt=""/>
                </div>
                
            </div>
        </div>
    </div>

        @forelse ($categoria->Producto as $r)
        <div class="py-12">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="p-4 overflow-hidden bg-blue-200 shadow-2xl sm:rounded-lg">
                <div class="md:shrink-0">
                    <a href="{{$categoria->slug}}/{{$r->slug}}">
                        <img class="rounded-t-lg" src="{{ asset('img/producto') }}/{{$r->urlfoto}}" alt=""/>
                    </a>
                    
                    <div class="text-center uppercase tracking-wide text-2xl text-indigo-500 font-semibold">
                            {{$r->nombre}}
                        <p class="mt-2 text-gray-500">{{$r->description}}</p>
                    </div>
                </div>
             
            </div>
        </div>

        @empty

        @endforelse





</div>
</x-app-layout>
