<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Búsqueda Académica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            padding: 20px;
        }

        a {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 14px;
        }

        a:hover {
            background-color: #0056b3;
        }

        h1 {
            margin-top: 10px;
        }

        .btn {
            padding: 8px 14px;
            border-radius: 5px;
            font-size: 14px;
            color: white;
            text-decoration: none;
            display: inline-block;
            margin-right: 10px;
        }

        .btn-articulos {
            background-color: #28a745;
        }

        .btn-busquedas {
            background-color: #007bff;
        }

        .btn-articulos:hover {
            background-color: #218838;
        }

        .btn-busquedas:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>Sistema de Búsqueda Académica</h1>
<p>Bienvenido al sistema donde puedes gestionar artículos académicos y realizar búsquedas para encontrarlos.</p>

<div>
    <!-- Botón para gestionar artículos -->
    <a href="index.php?modulo=articulo&accion=listar" class="btn btn-articulos">Gestionar Artículos</a>

    <!-- Botón para gestionar búsquedas -->
    <a href="index.php?modulo=busqueda" class="btn btn-busquedas">Gestionar Búsquedas</a>
</div>

</body>
</html>
