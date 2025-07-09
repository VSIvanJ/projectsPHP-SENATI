<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualiza Persona</title>
    </head>
    <body>
        <header>
            <h1>INGRESAR NUEVOS DATOS:</h1>
            <p>Aquí puede cambiar los siguientes datos: <b><i>Dirección</i></b> y <b><i>Nº de Celular</i></b></p>
            <hr>
        </header>
        <main>
            <form action="procActuPersona.php" method="POST">
                <label for="id_persona">ID de cuenta:</label>
                <input type="text" id="txtIDPersona" name="txtIDPersona" required>
                <br><br>
                <label for="dni">Ingresar N° DNI:</label>
                <input type="text" id="txtDni" name="txtDni" required>
                <br><br>
                <label for="direccion">Nueva Dirección:</label>
                <input type="text" id="txtDireccion" name="txtDireccion" required>
                <br><br>
                <label for="celular">Nuevo N° Celular:</label>
                <input type="text" id="txtCelular" name="txtCelular" required>
                <br><br>
                <button type="submit">ACTUALIZAR DATOS</button>
                <hr>
            </form>
        </main>
    </body>
</html>
