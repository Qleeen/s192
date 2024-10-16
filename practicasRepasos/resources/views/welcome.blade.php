<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])

    <title>Inicio</title>
</head>
<body>
<h1></h1>

<style>

        .buttons {
            margin-top: 300px;
            margin-left: 550px;
        }
        .buttons a {
            text-decoration: none;
            color: white;
            background-color: #0073e6;
            padding: 30px 50px;
            border-radius: 10px;
            margin: 0 10px;
            transition: background-color 0.3s;
        }
        .buttons a:hover {
            background-color: #005bb5;
        }
    </style>

<div class="buttons">
        <a href="{{route('rutaportada')}}">Portada</a>
    </div>

    
</body>
</html>