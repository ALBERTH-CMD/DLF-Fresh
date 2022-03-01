<x-app-layout>

<div>
    <div class="flex justify-center">
        <div class="mt-5 col-sm-9">
            <h2 class="flex justify-center text-lg font-medium leading-10 text-gray-900">DATOS DE CONTACTO</h2>
            <ul class="p-10 rounded-lg shadow-2xl bg-white max-w-full">
                <li>Razón Social: {{$config->razonsocial}}</li>
                <li>Dirección: {{$config->direccion}}</li>
                <li>Celular: {{$config->celular}}</li>
                <li>email: {{$config->email}}</li>
            </ul>



            @if(session('info'))
            <div class="alert alert-success">
                <strong>{{session('info')}}</strong>
            </div>
            @endif

            <div class="mt-5 block p-6 rounded-lg shadow-2xl bg-white max-w-full">

                <form action="contacto" method="POST">
                        @csrf

                    <div class="col-span-6 sm:col-span-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" name="email" id="email" placeholder="name@example.com" required>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" name="nombre" id="nombre" placeholder="Nombre" required>
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label for="telefono" class="block text-sm font-medium text-gray-700">Telefono</label>
                        <input type="text" autocomplete="phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" name="telefono" id="telefono" placeholder="Telefono" required>
                    </div>

                    <div class="mt-1">
                    <label for="mensaje" class="block text-sm font-medium text-gray-700">Mensaje</label>
                    <textarea class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" name="mensaje" id="mensaje" rows="3" required></textarea>
                    </div>

                    <div style="text-align: center;">
                        <input type="submit" style="margin: 20px" class="btn btn-outline-secondary" name="btnenviar" value="ENVIAR MENSAJE">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
