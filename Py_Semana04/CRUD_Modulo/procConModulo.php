<?php

include '../PDO/Conexion.php';
include '../PDO/ModuloDAO.php';

$idmodulo = $_POST['txtIDMod'];

$con_ModuloDAO = new ModuloDAO();

$consultarModulo = $con_ModuloDAO->consultarModulo($idmodulo);
if($consultarModulo){
    echo "Datos encontrados:<br>";
    echo "<===================================><br>";
    echo "<b>ID Módulo:  </b>".$consultarModulo['id_modulo']."<br>";
    echo "<b>Nombre:  </b>".$consultarModulo['nombre']."<br>";
    echo "<b>URL:  </b>".$consultarModulo['url']."<br>";
    echo "<b>Estado:  </b>".$consultarModulo['estado']."<br><br><br>";
    echo "<p>Otras acciones que puede realizar:<br></p>";
    echo "<a href='frmDarBajaModulo.php'>DARSE_DE_BAJA</a><br>";
    echo "<a href='frmActualizarModulo.php'>ACTUALIZAR_DATOS</a><br>";
}else{
    echo "Datos ingresados inválidos. Vuelva a intentarlo.<br>";
    echo "<a href='frmConsultarModulo.php'>REGRESAR</a>";
}