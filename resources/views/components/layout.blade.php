<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>BackGate</title>
        {{-- @vite('resources/js/app-layout.js') --}}
        @vite('resources/js/app.js')
    </head>
    <body class="bg-black bodyClass">
        {{-- @yield('content') --}}
        {{ $slot }}

    </body>
</html>
