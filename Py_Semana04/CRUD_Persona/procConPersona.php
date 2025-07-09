<?php

include '../PDO/Conexion.php';
include '../PDO/PersonaDAO.php';

$nombre=$_POST["txtNombre"];
$apePaterno=$_POST["txtApePaterno"];
$apeMaterno=$_POST["txtApeMaterno"];

//Crear objeto para invocar a PersonaDAO()
$con_PersonaDAO = new PersonaDAO();

//Elegir que funcion invocar mediante y almacenarlo en una $variable_objeto
$consultarPersona = $con_PersonaDAO->consultarPersona($nombre, $apePaterno, $apeMaterno);

//Si consultarPersona es verdadero (todos los datos están agregados)
//Para invocar los datos de la BD ==> $variable_objeto['columna']
if($consultarPersona){
    echo "DATOS ENCONTRADOS:<br>";
    echo "=============================================";
    echo "<br>";
    echo "ID:  ".$consultarPersona['id_persona']."<br><br>";
    echo "Nombre:  ".$consultarPersona['nombre']."<br><br>";
    echo "Apellido Paterno:  ".$consultarPersona['apePaterno']."<br><br>";
    echo "Apellido Materno:  ".$consultarPersona['apeMaterno']."<br><br>";
    echo "N° DNI:  ".$consultarPersona['dni']."<br><br>";
    echo "Dirección registrada:  ".$consultarPersona['direccion']."<br><br>";
    echo "N° de celular registrado:  ".$consultarPersona['celular']."<br><br>";
    echo "Fecha de Nacimiento(Año/Mes/Día):  ".$consultarPersona['fecNac']."<br><br>";
}else{
    echo "Datos ingresados inválidos. Vuelva a intentarlo.<br>";
    echo "<a href='frmConsultarPersona.php'>REGRESAR</a>";
}