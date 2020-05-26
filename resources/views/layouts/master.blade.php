<!doctype html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        @yield('styles')
    </head>

    <body>
        @include('partials.header')
        @yield('content')
        @yield('scripts')
    </body>

</html>