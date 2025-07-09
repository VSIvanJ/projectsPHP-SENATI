<?php

include '../PDO/Conexion.php';
include '../PDO/PersonaDAO.php';

$nombre=$_REQUEST["txtNombre"];
$apePaterno=$_REQUEST["txtApePaterno"];
$apeMaterno=$_REQUEST["txtApeMaterno"];
$dni=$_REQUEST["txtDni"];
$direccion=$_REQUEST["txtDireccion"];
$nrocel=$_REQUEST["txtCelular"];
$fecnac=$_REQUEST["txtFecNac"];

$reg_PersonaDAO = new PersonaDAO();
$registroPersona = $reg_PersonaDAO->registrarPersona($nombre, $apePaterno, $apeMaterno, $dni, $direccion, $nrocel, $fecnac);

echo "Por favor, cree su cuenta de usuario:<br>";
echo '<a href="../CRUD_Usuario/frmRegUsuario.php">CREAR CUENTA USUARIO</a>';
