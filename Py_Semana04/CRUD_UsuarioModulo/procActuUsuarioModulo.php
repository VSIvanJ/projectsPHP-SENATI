<?php

include '../PDO/Conexion.php';
include '../PDO/Usuario_ModuloDAO.php';

$userModulo=$_POST['txtIDUMod'];

$actuUsuarioModulo = new Usuario_ModuloDAO();

$actualizarUM = $actuUsuarioModulo->actualizarUsuarioModulo($userModulo);