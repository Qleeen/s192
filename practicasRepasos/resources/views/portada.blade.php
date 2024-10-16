<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])
    <title>Portada</title>
    <!-- uso de cdn  -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body class="d-flex flex-column justify-content-center align-items-center vh-10 bg-light">

    <header class="bg-dark text-center text-white py-100 w-100">
        <h1>Programación Web</h1>
    </header>

    <div class="container text-center my-4">
        <p class="h2">Hector Baruch Ortiz Quintana</p>
        <p class="h5">Este es el repaso 1 de la materia</p>
        <p class="h4">S192</p>
        <img src="{{ asset('imagenes/logo.svg') }}" alt="Logo de la materia" width="400">
    </div>

    <div class="text-center my-4">
        <a href="{{ route('rutavista1') }}" class="btn btn-secondary">REPASO1</a>
    </div>
    <!-- bootstrap js para el uso de componentes dianmicos -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>   -->
</body>
</html>

