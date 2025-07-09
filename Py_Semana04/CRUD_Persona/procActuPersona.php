<?php

include '../PDO/Conexion.php';
include '../PDO/PersonaDAO.php';

$idpersona=$_POST['txtIDPersona'];
$dni=$_POST['txtDni'];
$direccion=$_POST['txtDireccion'];
$nrocel=$_POST['txtCelular'];

$actuPersona = new PersonaDAO();

$actualizarPersona = $actuPersona->actualizarPersona($idpersona, $dni, $direccion, $nrocel);