<?php

include '../PDO/Conexion.php';
include '../PDO/UsuarioDAO.php';

$idusuario=$_POST['txtUsuario'];
$clave=$_POST['txtClave'];

$dar_Baja_UserDao = new UsuarioDAO();

$bajaUsuario = $dar_Baja_UserDao->darBajaUsuario($idusuario, $clave);