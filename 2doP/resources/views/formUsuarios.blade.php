<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Documento</title>
    
</head>
<body>

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">
        @session('exito')
        <script>
        Swal.fire({
            title: "Respuesta de servidor",
            text: "{{ $value }}",
            icon: "success"
        });

    </script>
    @endsession
    <form action="/enviarInfo" method="POST">
        @csrf

        <div class="mb-3">
            <label  class="form-label">Correo: </label>
            <input type="mail" class="form-control" name="txtcorreo" value="{{ old('txtcorreo') }}">
            <small class="first-italic text-danger">{{ $errors->first('txtcorreo') }}</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña: </label>
            <input type="number" class="form-control" name="txtcontrasena" value="{{ old('txtcontrasena') }}">
            <small class="first-italic text-danger">{{ $errors->first('txtcontrasena') }}</small>
        </div>                

        <div class="mb-3">
            <label  class="form-label">Edad: </label>
            <input type="number" class="form-control"  name="txtedad" value="{{ old('txtedad') }}">
            <small class="first-italic text-danger">{{ $errors->first('txtedad') }}</small>
        </div>



        <button type="submit" class="btn btn-danger "> Guardar Usuario</button>


</div>


</body>
</html>