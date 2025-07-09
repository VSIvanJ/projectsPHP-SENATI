<?php

include '../PDO/Conexion.php';
include '../PDO/Usuario_ModuloDAO.php';

$id_usuario=$_REQUEST['txtIDUsuario'];
$id_modulo=$_REQUEST['txtIDModulo'];

$reg_UserMod = new Usuario_ModuloDAO();

$registroUM = $reg_UserMod->registrarUsuarioModulo($id_usuario, $id_modulo);

echo "Puede cerrar esta ventana e ir a la opción de 'Consultar / Editar / Eliminar' para saber más de sus cuentas.";