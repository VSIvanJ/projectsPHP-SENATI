<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualiza Módulo</title>
    </head>
    <body>
        <h1>INGRESAR NUEVOS DATOS:</h1>
        <p>Aquí puede cambiar los siguientes datos: <b><i>Nombre</i></b> y <b><i>URL</i></b></p>
        <p>El URL se cambia de manera automática en base al nuevo nombre</p>
        <hr>
        <form action="procActuModulo.php" method="POST">
            <label for="id_modulo">Ingresar ID de módulo:</label>
            <input type="text" id="txtIDModulo" name="txtIDModulo" required>
            <br><br>
            <label for="nombre">Ingrese nuevo nombre:</label>
            <input type="text" id="txtNombre" name="txtNombre" required>
            <br><br>
            <button type="submit">ACTUALIZAR DATOS</button>
        </form>
    </body>
</html>
