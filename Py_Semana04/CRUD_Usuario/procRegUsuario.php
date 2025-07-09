<?php

include '../PDO/Conexion.php';
include '../PDO/UsuarioDAO.php';

$idpersona=$_REQUEST['txtIdPersona'];
$usuario=$_REQUEST['txtUsuario'];
$clave=$_REQUEST['txtClave'];

$regUsuarioDao = new UsuarioDAO();

$registroUsuario = $regUsuarioDao->registrarUsuario($idpersona, $usuario, $clave);

echo "Por favor, cree su cuenta de módulo:<br>";
echo '<a href="../CRUD_Modulo/frmRegModulo.php">CREAR CUENTA MODULO</a>';