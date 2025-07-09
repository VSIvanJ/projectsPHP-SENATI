<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualizar UM</title>
    </head>
    <body>
        <h1>ACTUALIZAR USUARIO_MÓDULO:</h1>
        <p>Esta actualizacion se encarga de reactivar la cuenta y actualiza la fecha de activación.</p>
        <hr>
        <form action="procActuUsuarioModulo.php" method="POST">
            <label for="iduser_Modulo">ID UsuarioMódulo:</label>
            <input type="text" id="txtIDUMod" name="txtIDUMod">
            <br><br>
            <button type="submit">ACTUALIZAR</button>
        </form>
    </body>
</html>