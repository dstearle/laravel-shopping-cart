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

        <div class="container-fluid px-0">

			<div class="row no-gutters">

				<div class="col-12">

					{{-- Navbar --}}
                    @include('partials.header')

					{{-- Content --}}
                    <div class="col-10 offset-1">

                        @yield('content')
            
                    </div>

				</div>

			</div>

		</div>
        
    </body>

</html>