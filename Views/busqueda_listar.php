<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Búsquedas</title>
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

<h1>Listado de Búsquedas</h1>

<a href="index.php?modulo=busqueda&accion=crear" class="btn btn-nuevo">Nueva Búsqueda</a>

<table>
    <tr>
        <th>ID</th>
        <th>Estudiante</th>
        <th>Base de datos</th>
        <th>Tema</th>
        <th>Cadena de búsqueda</th>
        <th>Cantidad de resultados</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($datos as $fila) { ?>
    <tr>
        <td><?php echo $fila['id_busqueda']; ?></td>
        <td><?php echo $fila['estudiante']; ?></td>
        <td><?php echo $fila['base_datos_busq']; ?></td>
        <td><?php echo $fila['tema']; ?></td>
        <td><?php echo $fila['cadena_busqueda']; ?></td>
        <td><?php echo $fila['cantidad_resultados']; ?></td>
        <td>
            <a href="index.php?modulo=busqueda&accion=editar&id=<?php echo $fila['id_busqueda']; ?>" class="btn btn-editar">Editar</a>
            <a href="index.php?modulo=busqueda&accion=eliminar&id=<?php echo $fila['id_busqueda']; ?>" class="btn btn-eliminar" onclick="return confirm('¿Seguro que deseas eliminar esta búsqueda?');">Eliminar</a>
        </td>
    </tr>
<?php } ?>
</table>

</body>
</html>
