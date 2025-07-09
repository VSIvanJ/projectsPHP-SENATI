<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Cuenta:</title>
    </head>
    <body>
        <h1>CONSULTAR DATOS DE CUENTA PERSONAL:</h1>
        <p>Ingrese su nombre y sus apellidos para ver los detalles de su cuenta.</p>
        <hr>
        <form action="procConPersona.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="txtNombre" name="txtNombre" required>
            <br><br>
            <label for="apePaterno">Apellido Paterno:</label>
            <input type="text" id="txtApePaterno" name="txtApePaterno" required>
            <br><br>
            <label for="apeMaterno">Apellido Materno:</label>
            <input type="text" id="txtApeMaterno" name="txtApeMaterno" required>
            <br><br>
            <button type="submit">CONSULTAR</button>
        </form>
        <br>
        <a href="frmConsultarModulo.php">Consultar Modulo</a>
    </body>
</html>