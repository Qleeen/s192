<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])
    <title>Portada</title>

</head>
<body class="d-flex flex-column justify-content-center align-items-center vh-10 bg-warning">

    <header class="bg-dark text-center text-white py-100 w-100">
        <h1>Programación Web</h1>
    </header>

    <div class="container text-center my-4">
        <img src="{{ asset('imagenes/logo.svg') }}" alt="Logo de la materia" width="400">
        <br>
        </br>
        <p class="h2">Hector Baruch Ortiz Quintana</p>
        <p class="h3">Repaso 1 Laravel</p>
        <p class="h4">S192</p>
        
    </div>

    <div class="text-center my-4">
        <a href="{{ route('rutavista1') }}" class="btn btn-secondary">REPASO 1</a>
    </div>

</body>
</html>

