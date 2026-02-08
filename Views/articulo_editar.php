<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Artículo</title>
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

        .btn-editar {
            background-color: #28a745;
        }

        .btn-editar:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<a href="index.php?modulo=articulo&accion=listar" class="btn btn-editar">Volver al Listado</a>
<br><br>

<h1>Editar Artículo</h1>

<form method="POST" action="index.php?modulo=articulo&accion=actualizar">

    <input type="hidden" name="id" value="<?php echo $dato['id_articulos']; ?>">

    <label>Título:</label><br>
    <input type="text" name="titulo" value="<?php echo $dato['titulo']; ?>" required><br><br>

    <label>Autores:</label><br>
    <input type="text" name="autores" value="<?php echo $dato['autores']; ?>" required><br><br>

    <label>Anio:</label><br>
    <input type="text" name="anio" value="<?php echo $dato['anio']; ?>" required><br><br>

    <label>Revista:</label><br>
    <input type="text" name="revista" value="<?php echo $dato['revista']; ?>" required><br><br>

    <label>Resumen:</label><br>
    <textarea name="resumen" required><?php echo $dato['resumen']; ?></textarea><br><br>

    <label>Palabras clave:</label><br>
    <input type="text" name="palabras_clave" value="<?php echo $dato['palabras_clave']; ?>" required><br><br>

    <label>ID Búsqueda:</label><br>
    <input type="text" name="busqueda_id" value="<?php echo $dato['busqueda_id']; ?>" required><br><br>

    <button type="submit" class="btn btn-editar">Actualizar Artículo</button>

</form>

</body>
</html>
