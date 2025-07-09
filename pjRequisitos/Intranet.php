<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <link href="Resources/css/style-intranet.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Alumnos S.A.C</h1>
        <main class="container">
            <div class="paquetes">
                <?php include './PAQUETE/cargarPaquetes.php'?>
            </div>
        </main>
        <footer>
            <p>Si ya has comprado un paquete y necesitas soporte, puedes realizar una petición aquí:</p>
            <a href="PETICION/frmRegPeticion.php" draggable="false"><button class="opciones">Solicitar Soporte</button></a>
            <a href="DESCARGA/pjSemana12.jar" download draggable="false"><button class="opciones">Descargar prueba (.jar)</button></a>
        </footer>
    </body>
</html>