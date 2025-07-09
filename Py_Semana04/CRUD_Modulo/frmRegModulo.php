<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro Módulo</title>
    </head>
    <body>
        <h1>REGISTRO DE CUENTA MÓDULO:</h1>
        <p>Su URL se crea automaticamente. Ejemplo: <i>3lectro<b>user10A</b>store@elecst.com</i></p>
        <p>Lo que se encuentra en <b>negrita</b> es el nombre que usted ingresa.</p>
         <hr>
         <form action="procRegModulo.php" method="POST">
            <label for="nombre">Ingresar Nombre:</label>
            <input type="text" id="txtNombre" name="txtNombre" required>
            <br><br>
            <button type="submit">REGISTRARSE</button>
        </form>
    </body>
</html>