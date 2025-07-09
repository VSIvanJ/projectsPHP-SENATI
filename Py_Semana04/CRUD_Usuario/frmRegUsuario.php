<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Crear Usuario</title>
    </head>
    <body>
        <header>
            <h1>REGISTRO DE CUENTA USUARIO:</h1>
            <p>Deberá ingresar el ID de su cuenta personal, la cual le es mostrado cuando terminar de registrar sus datos</p>
            <hr>
        </header>
        <br><br>
        <main>
            <form action="procRegUsuario.php" method="POST">
                <label for="id_persona">ID de cuenta Persona:</label>
                <input type="text" id="txtIdPersona" name="txtIdPersona" required>
                <br><br>
                <label for="usuario">Nombre de Usuario:</label>
                <input type="text" id="txtUsuario" name="txtUsuario" required>
                <br><br>
                <label for="clave">Crear Contraseña:</label>
                <input type="password" id="txtClave" name="txtClave" required>
                <br><br>
                <button type="submit">REGISTRARSE</button>
                <br><br>
            </form>
        </main>
    </body>
</html>