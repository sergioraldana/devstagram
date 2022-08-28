<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DevStagram - @yield('titulo')</title>
{{--    Agrega los estilos de tailwind css con vite--}}
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<header class="p-5 border-b bg-white shadow">
    <div class="container mx-auto flex justify-between">
        <h1 class="text-3xl font-bold">
            DevStagram
        </h1>
        <nav class="flex gap-2 items-center">
            <a href="#" class="font-bold uppercase text-gray-600">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="font-bold uppercase text-gray-600">Crear cuenta</a>
        </nav>
    </div>
</header>
<main class="container mx-auto mt-10">
    <h2 class="font-bold text-center text-3xl mb-10">
        @yield('titulo')
    </h2>
    @yield('contenido')
</main>
<footer class="text-center text-sm p-5 text-gray-500 uppercase mt-10">
    {{--    now() es un helper de laravel   --}}
    DevsTagram - todos los derechos reservados {{ now()->year }}
</footer>

</body>
</html>
