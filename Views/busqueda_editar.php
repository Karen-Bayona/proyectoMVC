<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Búsqueda</title>
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

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
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

        .btn-editar {
            background-color: #28a745;
        }

        .btn-editar:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<a href="index.php?modulo=busqueda" class="btn btn-editar">Volver al Listado</a>
<br><br>

<h1>Editar Búsqueda</h1>

<form method="POST" action="index.php?modulo=busqueda&accion=actualizar">

    <input type="hidden" name="id" value="<?php echo $dato['id_busqueda']; ?>">

    <label>Estudiante:</label><br>
    <input type="text" name="estudiante" value="<?php echo $dato['estudiante']; ?>" required><br><br>

    <label>Base de datos:</label><br>
    <input type="text" name="base_datos" value="<?php echo $dato['base_datos_busq']; ?>" required><br><br>

    <label>Tema:</label><br>
    <input type="text" name="tema" value="<?php echo $dato['tema']; ?>" required><br><br>

    <label>Cadena de búsqueda:</label><br>
    <textarea name="cadena" required><?php echo $dato['cadena_busqueda']; ?></textarea><br><br>

    <label>Cantidad de resultados:</label><br>
    <input type="number" name="cantidad" value="<?php echo $dato['cantidad_resultados']; ?>" required><br><br>

    <button type="submit" class="btn btn-editar">Actualizar Búsqueda</button>

</form>

</body>
</html>
