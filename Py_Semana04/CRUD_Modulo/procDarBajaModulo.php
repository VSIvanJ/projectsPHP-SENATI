<?php

include '../PDO/Conexion.php';
include '../PDO/ModuloDAO.php';

$idmodulo = $_POST['txtIDModulo'];
$nombre = $_POST['txtNombre'];

$dar_Baja_Modulo = new ModuloDAO();

$bajaModulo = $dar_Baja_Modulo->darBajaModulo($idmodulo, $nombre);

echo "<p>Puede consultar si su módulo de cuenta fue dado de baja.<br></p>";
echo "<a href='frmConsultarModulo.php'>CONSULTAR_DATOS</a><br>";