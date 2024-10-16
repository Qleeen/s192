<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])
    <title>Portada</title>
    <style>
        body {
            font-family: Arial,;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 30vh;
        }
        header {
            text-align: center;
            background-color: #0073e6;
            color: white;
            padding: 20px;
            width: 100%;
        }
        h1 {
            margin: 0;
        }
        .intro {
            margin: 20px;
            text-align: center;
        }
        .intro p {
            font-size: 1.2em;
            color: #333;
        }
        .buttons {
            margin-top: 20px;
        }
        .buttons a {
            text-decoration: none;
            color: white;
            background-color: #0073e6;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0 10px;
            transition: background-color 0.3s;
        }
        .buttons a:hover {
            background-color: #005bb5;
        }
    </style>
</head>
<body>
    <header>
        <h1>Porgramación Web</h1>
    </header>
    <div class="intro">
        <p>Hector Baruch Ortiz Quintana.</p>
        <p>Este es el repaso 1 de la materia.</p>
    </div>
    <div class="buttons">
        <a href="/vista1">REPASO1</a>
    </div>
</body>
</html>