<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Consultar Usuario</title>
    </head>
    <body>
        <h1>CONSULTAR DATOS DE CUENTA USUARIO</h1>
        <p>Ingrese su ID de usuario y clave para ver los detalles de su cuenta.</p>
        <form action="procConsultarUsuario.php" method="POST">
            <label for="usuario">Usuario:</label>
            <input type="text" id="txtUsuario" name="txtUsuario" required>
            <br><br>
            <label for="clave">Clave:</label>
            <input type="password" id="txtClave" name="txtClave" required>
            <br><br>
            <button type="submit">CONSULTAR</button>
        </form>
        <br>
        <a href="procRecuperaClave.php">-->¿Olvidaste tu contraseña?...Click aquí<--</a>
    </body>
</html>