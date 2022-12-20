<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title',$config->seo_title)</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <meta name="description" content="@yield('description',$config->seo_description)">
        <meta property="og:type" content="website"/>
        <meta property="og:description" content="@yield('description',  $config->seo_description)"/>
        <meta property="og:url" content="@yield('url','https://proessaconsultorialimentaria.herokuapp.com')"/>
        <meta property="og:site_name" content="Consultoria.com"/>
        <meta property="og:image" content="@yield('image','https://proessaconsultorialimentaria.herokuapp.com/img/configuracion/'.$config->seo_urlfoto)"/>
        <link rel="canonical" href="@yield('url','https://proessaconsultorialimentaria.herokuapp.com')"/>
        <link rel="shortcut icon" href="{{ asset('/img/configuracion') }}/{{$config->urlfavicon}}"/>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/tarjects.js') }}" ></script>

        <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


        <!-- CSS only -->


        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/tarjects.css') }}">


        @livewireStyles




    <style>
        h1,h2,h3,.nav-link,.font-anton{
        font-family: 'Anton', sans-serif;
        }
        p,ul,li{font-family: 'Nunito', sans-serif;}
        .navbar-light .navbar-nav .nav-link {color:#5de70dd0 !important}
        .bg-danger{ background:#3700ff !important}
        .text-danger{ color:#f14a02 !important}
        .text-warning{ color:#0e0d0d !important}
        .bg-warning{ background:#05050583 !important}
        </style>
    </head>
    <body class="font-sans antialiased">

        <x-jet-banner />

        <div class="min-h-screen bg-gray-200">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <!-- Scripts -->
        <script src="{{asset('js/app.js')}}"></script>

        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])


        @auth

            <script>

                Echo.private('App.Models.User.' + {{ Auth::user()->id}})
                    .notification((notification) => {
                       Livewire.emit('notification');
                    });

            </script>
        @endauth

    </body>
</html>
