<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:image" content="{{ asset('img/corazon.png') }}" />
    <meta property="og:title" content="RABITO DE PUERCO" />
    <meta property="og:description" content="Este es un juego hecho con mucho amor" />

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Agrega la siguiente línea para establecer el ícono de la pestaña -->
    <link rel="icon" type="image/png" href="{{ asset('img/corazon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-cover bg-center bg-fixed" style="background-image: url('/img/pareja4.jpg')">

    <style>
        @media (max-width: 600px) {
            .md\:bottom-16 {
                bottom: 4rem;
            }

            .md\:right-16 {
                right: 4rem;
            }
        }
    </style>

    <div class="relative h-screen flex justify-center items-center">
        @auth
        <a href="{{ route('/') }}" class="bg-red-800 text-white uppercase py-2 px-4 md:py-4 md:px-6 rounded-xl hover:bg-blue-900 absolute bottom-8 right-8 md:bottom-16 md:right-16">DASHBOARD</a>
        @else
        <a href="{{ route('login') }}" class="bg-red-800 text-white uppercase py-4 px-6 md:py-6 md:px-8 rounded-xl hover:bg-blue-900 absolute bottom-8 right-8 md:bottom-16 md:right-16 md:w-72 flex justify-center items-center text-lg font-bold">INGRESAR</a>
        @endauth
    </div>

</body>

</html>