<?php

include '../PDO/Conexion.php';
include '../PDO/UsuarioDAO.php';


$idusuario = $_POST['txtIDUsuario'];
$usuario= $_POST['txtUsuario'];
$clave = $_POST['txtClave'];

$actuUsuarioDao = new UsuarioDAO();

$actualizarUsuario = $actuUsuarioDao->actualizarUsuario($idusuario, $usuario, $clave);