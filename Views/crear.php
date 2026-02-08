<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Artículo</title>
    <style>
        /* Mantengo tus estilos intactos */
        body { font-family: Arial, sans-serif; background-color: #f4f6f8; padding: 20px; }
        a { text-decoration: none; background-color: #007bff; color: white; padding: 8px 12px; border-radius: 5px; font-size: 14px; }
        a:hover { background-color: #0056b3; }
        h1 { margin-top: 10px; }
        input, textarea, select { width: 100%; padding: 10px; margin: 5px 0; border: 1px solid #ccc; border-radius: 5px; font-size: 14px; }
        input[type="text"], textarea, select { min-height: 40px; }
        .btn { padding: 6px 10px; border-radius: 5px; font-size: 13px; color: white; text-decoration: none; margin-right: 5px; display: inline-block; cursor: pointer; border: none; }
        .btn-nuevo { background-color: #007bff; }
        .btn-nuevo:hover { background-color: #0056b3; }
    </style>
</head>
<body>

<a href="index.php">⬅ Volver al inicio</a>
<br><br>

<h1>Crear Nuevo Artículo</h1>

<form method="POST" action="index.php?modulo=articulo&accion=guardar">

    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>

    <label>Autores:</label><br>
    <input type="text" name="autores" required><br><br>

    <label>Anio:</label><br>
    <input type="text" name="anio" required><br><br>

    <label>Revista:</label><br>
    <input type="text" name="revista" required><br><br>

    <label>Resumen:</label><br>
    <textarea name="resumen" required></textarea><br><br>

    <label>Palabras clave:</label><br>
    <input type="text" name="palabras_clave" required><br><br>

    <label>ID Búsqueda (Seleccione una de la lista):</label><br>
    <select name="busqueda_id" required>
        <option value="">-- Seleccione una búsqueda existente --</option>
        <?php foreach ($busquedas as $busqueda): ?>
            <option value="<?php echo $busqueda['id_busqueda']; ?>">
                ID: <?php echo $busqueda['id_busqueda']; ?> - <?php echo $busqueda['tema']; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <button type="submit" class="btn btn-nuevo">Guardar Artículo</button>

</form>

</body>
</html>