<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Búsqueda</title>
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

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: white;
            margin-top: 15px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 14px;
        }

        th {
            background-color: #343a40;
            color: white;
        }

        h1 {
            margin-top: 10px;
        }

        /* Estilo para los inputs y textareas */
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        input[type="text"], input[type="number"], textarea {
            min-height: 40px;
        }

        .btn {
            padding: 6px 10px;
            border-radius: 5px;
            font-size: 13px;
            color: white;
            text-decoration: none;
            margin-right: 5px;
            display: inline-block;
        }

        .btn-nuevo {
            background-color: #007bff;
        }

        .btn-nuevo:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<a href="index.php">⬅ Volver al inicio</a>
<br><br>

<h1>Crear Nueva Búsqueda</h1>

<form method="POST" action="index.php?modulo=busqueda&accion=guardar">

    <label>Estudiante:</label><br>
    <input type="text" name="estudiante" required><br><br>

    <label>Base de datos:</label><br>
    <input type="text" name="base_datos" required><br><br>

    <label>Tema:</label><br>
    <input type="text" name="tema" required><br><br>

    <label>Cadena de búsqueda:</label><br>
    <textarea name="cadena" required></textarea><br><br>

    <label>Cantidad de resultados:</label><br>
    <input type="number" name="cantidad" required><br><br>

    <button type="submit" class="btn btn-nuevo">Guardar Búsqueda</button>

</form>

</body>
</html>
