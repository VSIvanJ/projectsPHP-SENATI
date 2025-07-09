<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar Cuenta Persona</title>
    </head>
    <body>
        <header>
            <h1>ELIMINAR CUENTA PERSONAL:</h1>
            <p>Ingrese los datos requeridos para poder darse de baja:</p>
            <p>Una vez hecho el proceso, se dará de baja su módulo de cuenta.</p>
            <hr>
        </header>
        <main>
            <form action="procEliminarPersona.php" method="POST">
                <label for="id_persona">ID de cuenta:</label>
                <input type="text" id="txtIDPersona" name="txtIDPersona" required>
                <br><br>
                <label for="dni">Ingresar N° DNI:</label>
                <input type="text" id="txtDni" name="txtDni" required>
                <br><br>
                <button type="submit">CONTINUAR</button>
                <hr>
            </form>
        </main>
    </body>
</html>
