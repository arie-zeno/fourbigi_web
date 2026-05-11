<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @yield('style')
        @livewireStyles
    </head>
    <body class="bg-gradient-to-br from-slate-50 via-white to-purple-50 text-gray-800">

        {{ $slot }}
    </body>
@livewireScripts
</html>
