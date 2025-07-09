<?php

include '../PDO/Conexion.php';
include '../PDO/UsuarioDAO.php';

$usuario=$_POST['txtUsuario'];
$clave=$_POST['txtClave'];

$con_UsuarioDao = new UsuarioDAO();

$consultarUsuario = $con_UsuarioDao->consultarUsuario($usuario, $clave);

if($consultarUsuario){
    echo "Usuario encontrado <br>";
    echo "ID: ".$consultarUsuario['id_usuario']."<br>";
    echo "Usuario: ".$consultarUsuario['usuario']."<br>";
    echo "Clave: ".$consultarUsuario['clave']."<br>";
    echo "Estado de usuario: ".$consultarUsuario['estado']."<br>";
    
}else{
    echo "Verifica tus permisos primero. Sino llama al administrador";
}