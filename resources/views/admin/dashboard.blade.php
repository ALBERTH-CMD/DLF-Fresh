<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">

                <form action="{{route('messages.store')}}" method="POST">
                @csrf

                <div class="mb-4">
                    <x-jet-label>
                        Nombre
                    </x-jet-label>

                    <x-jet-input type="text"
                        value="{{old('name')}}"
                        class="w-full"
                        placeholder="Ingrese el Nombre de quien envia la notificacion"
                        name="name"/>

                    <x-jet-input-error for="name"/>
                </div>

                <div class="mb-4">
                    <x-jet-label>
                        Asunto
                    </x-jet-label>

                    <x-jet-input type="text"
                        value="{{old('subject')}}"
                        class="w-full"
                        placeholder="Ingrese el Asunto"
                        name="subject"/>

                    <x-jet-input-error for="subject"/>
                </div>

                <div class="mb-4">
                    <x-jet-label>
                        Mensaje
                    </x-jet-label>

                    <textarea class="w-full form-control"
                        name="body"
                        placeholder="Escriba su Mensaje"
                        rows="4">{{old('body')}}</textarea>

                        <x-jet-input-error for="body"/>
                </div>

                <div class="mb-4">
                    <x-jet-label>
                        Destinatario
                    </x-jet-label>

                    <select name="to_user_id" class="w-full form-control">
                        <option value="" {{old('to_user_id') ? '' : 'selected'}} disabled>Seleccione un Usuario</option>

                        @foreach ($users as $user )
                            <option {{old('to_user_id') == $user->id ? 'selected' : ''}} value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>

                    <x-jet-input-error for="to_user_id"/>
                </div>

                <x-jet-button>
                    Enviar
                </x-jet-button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
