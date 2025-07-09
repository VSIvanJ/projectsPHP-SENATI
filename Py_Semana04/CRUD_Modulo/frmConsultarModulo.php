<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar modulo</title>
    </head>
    <body>
         <h1>CONSULTAR DATOS DE CUENTA MÓDULO:</h1>
         <p>Ingrese su ID de módulo para ver los detalles de su cuenta.</p>
         <hr>
         <form action="procConModulo.php" method="POST">
            <label for="id_modulo">ID Módulo:</label>
            <input type="text" id="txtIDMod" name="txtIDMod" required>
            <br><br>
            <button type="submit">CONSULTAR</button>
        </form>
    </body>
</html>