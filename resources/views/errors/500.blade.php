<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 500 - Error de conexión a la base de datos</title>
    <link rel="stylesheet" href="styles.css"> <!-- Agrega el enlace a tu archivo CSS -->
    <style>
        /* Agrega estilos CSS adicionales aquí */
        body {
            background-color: #f3f4f6;
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .error-container {
            max-width: 400px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        .error-container h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #1a202c;
            margin-bottom: 20px;
        }
        .error-container p {
            font-size: 1rem;
            color: #4a5568;
            margin-bottom: 30px;
        }
        .error-container img {
            width: 100%;
            max-width: 300px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .error-container a {
            display: inline-block;
            background-color: #4299e1;
            color: #ffffff;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .error-container a:hover {
            background-color: #3182ce;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>Error de conexión a la base de datos</h1>
        <p>Lo sentimos, no podemos procesar tu solicitud en este momento debido a un error de conexión a la base de datos.</p>
        <img src="img/gatito.jpg" alt="Error de conexión">
        @auth
            <a href="{{route('dashboard')}}">Volver al panel</a>
        @else
        <a href="/">Volver al inicio</a>
        @endauth
        
    </div>
</body>
</html>
