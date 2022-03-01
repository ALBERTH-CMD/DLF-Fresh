<x-app-layout>
<div class="bg-light-blue-300">

    <div class="mt-5 col-sm-12">
        <div class="flex justify-center">
            <div class="max-w-sm bg-white rounded-lg shadow-lg">
                <img class="rounded-t-lg" src="{{ asset('/img/empresa') }}/{{$empresa->urlsomos}}" alt=""/>
              <div class="p-6">
                <h5 class="mb-2 text-xl font-medium text-gray-900">QUIENES SOMOS</h5>
                <p class="mb-4 text-base text-gray-700">
                    {!! $empresa->somos !!}
                </p>
              </div>
            </div>
        </div>

        <div class="max-w-md mx-auto mt-5 overflow-hidden bg-white shadow-2xl rounded-xl md:max-w-2xl">
            <div class="md:flex">
                <div class="md:shrink-0">
                <img class="object-cover w-full h-85 md:h-full md:w-150" src="{{ asset('/img/empresa') }}/{{$empresa->urlmision}}" alt="Man looking at item at a store">
                </div>
                <div class="p-8">
                <div class="text-sm font-semibold tracking-wide text-indigo-500 uppercase">MISION</div>
                <p class="mt-2 text-gray-500">{!! $empresa->mision !!}</p>
                </div>
            </div>
        </div>

        <div class="max-w-md mx-auto mt-5 overflow-hidden bg-white shadow-2xl rounded-xl md:max-w-2xl">
            <div class="md:flex">
                <div class="p-10">
                <div class="text-sm font-semibold tracking-wide text-indigo-500 uppercase">VISION</div>
                <p class="mt-2 text-gray-500">{!! $empresa->vision !!}</p>
                </div>
                <div class="md:shrink-0">
                <img class="object-cover w-full h-48 md:h-full md:w-150" src="{{ asset('/img/empresa') }}/{{$empresa->urlvision}}" alt="Man looking at item at a store">
                </div>
            </div>
        </div>

        <div class="max-w-md mx-auto mt-5 overflow-hidden bg-white shadow-2xl rounded-xl md:max-w-2xl">
            <div class="md:flex">
                <div class="md:shrink-0">
                <img class="object-cover w-full h-85 md:h-full md:w-150" src="{{ asset('/img/empresa') }}/{{$empresa->urlvalores}}" alt="Man looking at item at a store">
                </div>
                <div class="p-8">
                <div class="text-sm font-semibold tracking-wide text-indigo-500 uppercase">VALORES CORPORATIVOS</div>
                <p class="mt-2 text-gray-500">{!! $empresa->valores !!}</p>
                </div>
            </div>
        </div>

        <div class="max-w-md mx-auto mt-5 overflow-hidden bg-white shadow-2xl rounded-xl md:max-w-2xl">
            <div class="md:flex">
                <div class="p-5">
                    <div class="text-sm font-semibold tracking-wide text-indigo-500 uppercase">RESEÑA HISTORICA</div>
                    <p class="mt-4 text-gray-500">{!! $empresa->historia !!}</p>
                </div>
                <div class="md:shrink-0">
                    <img class="object-cover w-full h-85 md:h-full md:w-150" src="{{ asset('/img/empresa') }}/{{$empresa->urlhistoria}}" alt="Man looking at item at a store">
                </div>
            </div>
        </div>

    </div>
</div>
</x-app-layout>

