<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Artículos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            padding: 20px;
        }

        /* Estilo para los botones (volver, editar, eliminar) */
        a {
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 14px;
        }

        a:hover {
            opacity: 0.8;
        }

        /* Estilo para el botón "Volver al inicio" */
        .btn-volver {
            background-color: #007bff; /* Azul */
            color: white;
            font-size: 14px;
            border-radius: 5px;
            padding: 8px 15px;
        }

        .btn-volver:hover {
            background-color: #0056b3; /* Azul más oscuro */
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

        /* Estilo de los botones Editar y Eliminar */
        .btn {
            padding: 6px 12px;
            border-radius: 5px;
            font-size: 14px;
            color: white;
            text-decoration: none;
            display: inline-block;
        }

        .btn-editar {
            background-color: #007bff; /* Azul */
        }

        .btn-editar:hover {
            background-color: #0056b3; /* Azul más oscuro */
        }

        .btn-eliminar {
            background-color: #dc3545; /* Rojo */
        }

        .btn-eliminar:hover {
            background-color: #c82333; /* Rojo más oscuro */
        }

        /* Contenedor de los botones */
        .btn-container {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>

<!-- Botón "Volver al inicio" con el nuevo estilo -->
<a href="index.php" class="btn-volver">⬅ Volver al inicio</a>
<br><br>

<h1>Listado de Artículos</h1>

<a href="index.php?modulo=articulo&accion=crear" class="btn btn-editar">Nuevo Artículo</a>
<br><br>

<table>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Autores</th>
        <th>Anio</th>
        <th>Revista</th>
        <th>Resumen</th>
        <th>Palabras clave</th>
        <th>ID Búsqueda</th>
        <th>Acciones</th>
    </tr>

    <?php while ($fila = $datos->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $fila['id_articulos']; ?></td>
            <td><?php echo $fila['titulo']; ?></td>
            <td><?php echo $fila['autores']; ?></td>
            <td><?php echo $fila['anio']; ?></td>
            <td><?php echo $fila['revista']; ?></td>
            <td><?php echo $fila['resumen']; ?></td>
            <td><?php echo $fila['palabras_clave']; ?></td>
            <td><?php echo $fila['busqueda_id']; ?></td>
            <td>
                <!-- Botones Editar y Eliminar alineados horizontalmente -->
                <div class="btn-container">
                    <a href="index.php?modulo=articulo&accion=editar&id=<?php echo $fila['id_articulos']; ?>" class="btn btn-editar">
                        Editar
                    </a>
                    <a href="index.php?modulo=articulo&accion=eliminar&id=<?php echo $fila['id_articulos']; ?>"
                       class="btn btn-eliminar"
                       onclick="return confirm('¿Seguro que deseas eliminar este artículo?');">
                       Eliminar
                    </a>
                </div>
            </td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
