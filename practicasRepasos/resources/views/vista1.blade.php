<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>vista1</title>
    </head>
<body>

<header class="bg-black text-center text-white py-101 w-101">
        <h1>Calculadora de unidades</h1>
    </header>

    <div class="container text-center my-4">
    <form action="/calculadora" method="POST">
        @csrf
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" step="any" required>

        <label for="conversion">Selecciona la conversión:</label>
        <select name="conversion" id="conversion">
            <option value="mb_gb">MB a GB</option>
            <option value="gb_mb">GB a MB</option>
            <option value="gb_tb">GB a TB</option>
            <option value="tb_gb">TB a GB</option>
        </select>

        <button type="submit">Convertir</button>
    </form>


    <!-- lo que hace esta funcion es ver si en resultado hay valores dentro -->
    @if(isset($resultado))
        <h5>El resultado de {{ $resultado }}</h5>

    <!-- finaliza el if -->
    @endif
    </div>
</body>
</html>