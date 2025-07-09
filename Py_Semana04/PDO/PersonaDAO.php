<?php

class PersonaDAO extends Conexion{
    
    public function consultarPersona($nombre,$apePaterno,$apeMaterno) {
        //SELECCIONAR TODAS LAS COLUMNAS DE DATOS DE UNA PERSONA EN BASE A NOMBRE Y APELLIDOS
        $sql = "SELECT * FROM persona WHERE nombre =:nombre AND apePaterno =:apePaterno AND apeMaterno =:apeMaterno";
        $stmt = $this->conn->prepare($sql);
        //INDICAR QUE VARIABLES SE TOMAN PARA CADA COLUMNA
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apePaterno', $apePaterno);
        $stmt->bindParam(':apeMaterno', $apeMaterno);
        $stmt->execute();
        //fetch SOLO cuando se quiera una sola fila
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        if($resultado){
            return $resultado;
        }else{
            return null;
        }
    }   
    
    public function registrarPersona($nombre,$apePaterno,$apeMaterno,$dni,$direccion,$nrocel,$fecnac) {
        try{
            //Insertar la persona en la base de datos
            $sql="INSERT INTO persona (nombre, apePaterno, apeMaterno, dni, direccion, celular, fecNac) VALUES (:nombre, :apePaterno, :apeMaterno, :dni, :direccion, :celular, :fecNac)";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apePaterno', $apePaterno);
            $stmt->bindParam(':apeMaterno', $apeMaterno);
            $stmt->bindParam(':dni', $dni);
            $stmt->bindParam(':direccion', $direccion);
            $stmt->bindParam(':celular', $nrocel);
            $stmt->bindParam(':fecNac', $fecnac);
            $stmt->execute();
            
            
            // Obtener el ID de la persona recién creada
            $idPersona = $this->conn->lastInsertId();
            echo "¡Felicidades!...Se registró correctamente. SU ID de cuenta es:  ".$idPersona."\n";
            echo "Copie el codigo que se muestra en pantalla.\n";
        }catch(PDOException $e) {
            echo "UPS...Error al registrarse.\n".$e->getMessage();
        }
    }
    
    public function actualizarPersona($idpersona,$dni,$direccion,$nrocel) {
        try{
            //Editar la dirección y celular de la persona según su DNI e ID_PERSONA
            $sql="UPDATE persona SET direccion = :direccion, celular = :celular WHERE id_persona = :id_persona AND dni = :dni ";
            $stmt= $this->conn->prepare($sql);
            
            $stmt->bindParam(':id_persona',$idpersona);
            $stmt->bindParam(':dni',$dni);
            $stmt->bindParam(':direccion',$direccion);
            $stmt->bindParam(':celular',$nrocel);
            $stmt->execute();
            
            $salida=$stmt->fetch(PDO::FETCH_ASSOC);
            echo "Se actualizaron los datos correctamente.\n";
            
        }catch(Exception $e) {
            echo "Error al intentar actualizar los datos.\n".$e->getMessage();
        }
    }
    public function eliminarPersona($idpersona,$dni) {
        try{
            $sql = "DELETE FROM persona WHERE id_persona = :id_persona AND dni = :dni";
            $stmt = $this->conn->prepare($sql);
            
            $stmt->bindParam('id_persona',$idpersona);
            $stmt->bindParam('dni',$dni);
            $stmt->execute();
            
            $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
            echo "Se eliminó la cuenta correctamente...Esperamos volver a verte muy pronto.\n";
            
        } catch(Exception $e){
            echo "Error al intentar elimminar la cuenta.\n".$e->getMessage();
        }
    }
}