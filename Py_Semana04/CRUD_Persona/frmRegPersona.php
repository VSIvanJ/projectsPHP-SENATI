<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../Resources/css/style_form.css" rel="stylesheet" type="text/css"/>
        <title>Formulario - Registro</title>
    </head>
    <body>
        <header>
            <h1>REGISTRO DE CUENTA PERSONAL:</h1>
            <hr>
        </header>
        <main>
            <form action="procRegPersona.php" method="POST">
                <label for="nombre">Nombre: </label>
                <input type="text" name="txtNombre" required>
                <br><br>
                <label for="apePaterno">Apellido Paterno: </label>
                <input type="text" name="txtApePaterno" required>
                <br><br>
                <label for="apeMaterno">Apellido Materno: </label>
                <input type="text" name="txtApeMaterno" required>
                <br><br>
                <label for="dni">N° DNI: </label>
                <input type="text" name="txtDni" required>
                <br><br>
                <label for="direccion">Dirección: </label>
                <input type="text" name="txtDireccion" required>
                <br><br>
                <label for="celular">N° Celular: </label>
                <input type="text" name="txtCelular" required>
                <br><br>
                <label for="fecNac">Fecha de Nacimiento: </label>
                <input type="date" name="txtFecNac" required>
                <br><br>
                <button type="submit">REGISTRARSE</button>
            </form>
        </main>
        <hr>
    </body>
</html>