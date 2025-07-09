<?php

include '../PDO/Conexion.php';
include '../PDO/Usuario_ModuloDAO.php';

$userModulo=$_POST['txtIDUM'];

$con_UserMod = new Usuario_ModuloDAO();

$consultarUM = $con_UserMod->consultarUsuarioModulo($userModulo);

if($consultarUM){
    echo "Datos encontrados:<br>";
    echo "<===================================><br>";
    echo "<b>ID UsuarioMódulo:  </b>".$consultarUM['iduser_Modulo']."<br>";
    echo "<b>ID Usuario:  </b>".$consultarUM['id_usuario']."<br>";
    echo "<b>ID Módulo:  </b>".$consultarUM['id_modulo']."<br>";
    echo "<b>Estado:  </b>".$consultarUM['estado']."<br><br><br>";
    echo "<b>Fecha activación:  </b>".$consultarUM['fecha_activacion']."<br><br><br>";
}else{
    echo "Datos ingresados inválidos. Vuelva a intentarlo.<br>";
    echo "<a href='frmConsultarUsuarioModulo.php'>REGRESAR</a>";
}