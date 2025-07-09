<?php

include '../PDO/Conexion.php';
include '../PDO/PersonaDAO.php';

$idpersona=$_POST['txtIDPersona'];
$dni=$_POST['txtDni'];

$elim_PersonaDao = new PersonaDAO();

$eliminarUsuario = $elim_PersonaDao->eliminarPersona($idpersona, $dni);