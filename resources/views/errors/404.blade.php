<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   
</head>
<body class="bg-gray-200 flex items-center justify-center h-screen">
    <div class="text-center">
        <img src="{{ asset('img/rat.jpg') }}" alt="Error 404" class="mx-auto mb-8 w-48">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Error 404 - Página no encontrada</h1>
        <p class="text-lg text-gray-700 mb-8">Lo sentimos, la página que estás buscando no pudo ser encontrada.</p>
        <a href="/" class="text-blue-500 hover:underline">Volver al inicio</a>
    </div>
</body>
</html>
