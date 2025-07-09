<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Baja a Modulo</title>
    </head>
    <body>
        <h1>DAR DE BAJA CUENTA MODULO:</h1>
        <p>Ingrese los datos requeridos para poder darse de baja:</p>
        <p>Una vez hecho el proceso, se dará de baja su cuenta de módulo.</p>
        <hr>
        <form action="procDarBajaModulo.php" method="POST">
            <label for="id_modulo">ID de módulo:</label>
            <input type="text" id="txtIDModulo" name="txtIDModulo" required>
            <br><br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="txtNombre" name="txtNombre" required>
            <br><br>
            <button type="submit">CONTINUAR</button>
        </form>
    </body>
</html>
