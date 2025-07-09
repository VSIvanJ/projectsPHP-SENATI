<?php

include '../PDO/Conexion.php';
include '../PDO/ModuloDAO.php';

$nombre=$_REQUEST['txtNombre'];

$reg_ModuloDAO = new ModuloDAO();

$salidaReg = $reg_ModuloDAO->registrarModulo($nombre);

echo "Está cerca de terminar el registro...Solo un paso más:<br>";
echo '<a href="../CRUD_UsuarioModulo/frmRegUsuarioModulo.php">ULTIMO PASO</a>';