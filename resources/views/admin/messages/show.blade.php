<x-app-layout>
   {{--  {{ dd($message->name) }} --}}
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <h1 style="text-align:center">Recibiste un Mensaje de {{ $message->name }}</h1>
                <p style="text-align:center">MENSAJE: <br> {{ $message->body }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
