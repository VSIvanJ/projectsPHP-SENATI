<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro Módulo</title>
    </head>
    <body>
        <h1>REGISTRO DE USUARIO_MÓDULO:</h1>
        <p>Debe ingresar los IDs que se mostraron anteriormente de su cuenta de usuario y de módulo.</p>
         <hr>
         <form action="procRegUsuarioModulo.php" method="POST">
            <label for="id_usuario">ID Usuario:</label>
            <input type="text" id="txtIDUsuario" name="txtIDUsuario" required>
            <br><br>
            <label for="id_modulo">ID Módulo:</label>
            <input type="text" id="txtIDModulo" name="txtIDModulo" required>
            <br><br>
            <button type="submit">REGISTRARSE</button>
        </form>
    </body>
</html>