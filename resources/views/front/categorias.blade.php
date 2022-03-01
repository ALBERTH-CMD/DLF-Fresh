<x-app-layout>

    <div>
        <div class="py-12">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="p-4 overflow-hidden bg-blue-200 shadow-2xl sm:rounded-lg">
                    <div class="mt-5 flex justify-center">
                        
                        <img class="rounded-t-lg" src="{{ asset('img/configuracion') }}/{{$config->seo_urlfoto}}" alt=""/>
                        
                    </div>
                    <h5 class="text-center text-gray-900 text-xl font-medium mb-2">Categorias</h5>
                    <p class="text-gray-700 text-center mb-4">
                        Tenemos una variedad de proyectos que pueden interesarte
                    </p>
                    
                </div>
            </div>
        </div>
        <div class="py-12">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                
                    @foreach ($categorias as $r)
                    <div class="mt-5 flex justify-center">
                        <div class="rounded-lg shadow-2xl bg-blue-200 max-w-sm">
                        <a href="artesanias/{{$r->slug}}">
                            <img class="rounded-t-lg" src="{{ asset('img/categoria') }}/{{$r->urlfoto}}" alt=""/>
                        </a>
                        <div class="p-6">
                            <h5 class="text-center text-gray-900 text-xl font-medium mb-2">{{$r->nombre}}</h5>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
