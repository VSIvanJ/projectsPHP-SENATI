<?php

include '../PDO/Conexion.php';
include'../PDO/ModuloDAO.php';

$idmodulo=$_POST['txtIDModulo'];
$nombre=$_POST['txtNombre'];


$actuModulo = new ModuloDAO();

$actualizarModulo = $actuModulo->actualizarModulo($idmodulo, $nombre);

echo "<p>Otras acciones que puede realizar:<br></p>";
echo "<a href='frmDarBajaModulo.php'>DARSE_DE_BAJA</a><br>";
echo "<a href='frmConsultarModulo.php'>CONSULTAR_DATOS</a><br>";