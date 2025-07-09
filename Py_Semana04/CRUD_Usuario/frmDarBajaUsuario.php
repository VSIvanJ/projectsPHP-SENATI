<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Baja Usuario</title>
    </head>
    <body>
        <h1>DAR DE BAJA CUENTA USUARIO:</h1>
        <p>Ingrese los datos requeridos para poder darse de baja:</p>
        <p>Una vez hecho el proceso, se dará de baja su cuenta de usuario.</p>
        <hr>
         <form action="procDarBajaUsuario.php" method="POST">
            <label for="usuario">ID de usuario:</label>
            <input type="text" id="txtUsuario" name="txtUsuario" required>
            <br><br>
            <label for="clave">Clave:</label>
            <input type="password" id="txtClave" name="txtClave" required>
            <br><br>
            <button type="submit">CONTINUAR</button>
        </form>
        <br>
    </body>
</html>