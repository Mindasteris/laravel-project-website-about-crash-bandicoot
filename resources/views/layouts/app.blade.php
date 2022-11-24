<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- BS ICONS --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

        <title> @yield('title') </title>

        @vite('resources/js/app.js')

    </head>
    <body class="antialiased">

        @include('includes.nav')

        @yield('content')
        
        @include('includes.footer')

    </body>
</html>
