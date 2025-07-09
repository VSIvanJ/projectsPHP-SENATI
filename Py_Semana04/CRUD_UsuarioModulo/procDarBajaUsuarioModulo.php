<?php

include '../PDO/Conexion.php';
include '../PDO/Usuario_ModuloDAO.php';

$userModulo=$_POST['txtIDUM'];

$dar_Baja_UserMod = new Usuario_ModuloDAO();

$bajaUM = $dar_Baja_UserMod->darBajaUsuarioModulo($userModulo);