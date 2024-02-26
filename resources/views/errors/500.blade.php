<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 500 - Error de conexión a la base de datos</title>
   
</head>
<body class="bg-gray-100 font-sans flex flex-col items-center justify-center min-h-screen">
    <div class="max-w-md py-6 px-4 bg-white shadow-lg rounded-lg">
        <div class="text-center">
            <h1 class="text-3xl font-semibold text-gray-900 mb-4">Error de conexión a la base de datos</h1>
            <p class="text-gray-700 mb-6">Lo sentimos, no podemos procesar tu solicitud en este momento debido a un error de conexión a la base de datos.</p>
            <img src="{{ asset('img/gatito.jpg') }}" alt="Error de conexión" class="mx-auto mb-6 rounded-lg shadow-lg">
            <a href="/" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg">Volver al inicio</a>
        </div>
    </div>
</body>
</html>
