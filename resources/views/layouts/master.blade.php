<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Title --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/4baec25f5b.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body>

        {{-- Navbar --}}
        @include('partials.header')

        {{-- Content --}}
        <div class="container m-5">

            @yield('content')

        </div>
        
    </body>

</html>