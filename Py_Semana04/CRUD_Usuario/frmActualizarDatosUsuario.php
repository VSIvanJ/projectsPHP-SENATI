<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualiza Usuario</title>
    </head>
    <body>
        <h1>INGRESAR NUEVOS DATOS:</h1>
        <p>Aquí puede cambiar el siguiente dato: <b><i>Nombre de Usuario</i></b></p>
        <hr>
         <form action="procActualizarUsuario.php" method="POST">
            <label for="id_usuario">Ingresar ID de usuario:</label>
            <input type="text" id="txtIDUsuario" name="txtIDUsuario" required>
            <br><br>
            <label for="clave">Ingresar clave:</label>
            <input type="password" id="txtClave" name="txtClave" required>
            <br><br>
            <label for="usuario">Nuevo nombre de Usuario:</label>
            <input type="text" id="txtUsuario" name="txtUsuario" required>
            <br><br>
            <button type="submit">ACTUALIZAR DATOS</button>
        </form>
    </body>
</html>