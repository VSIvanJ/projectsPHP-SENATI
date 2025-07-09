<?php

class ModuloDAO extends Conexion{
    
    public function registrarModulo($nombre) {
        try{
            $estado=1;
            $url="3lectro".$nombre."store@elecst.com";
            
            $registro="INSERT INTO modulo (nombre, url, estado) VALUES (:nombre, :url, :estado) ";
            
            $stmt= $this->conn->prepare($registro);
            $stmt->bindParam(':nombre',$nombre);
            $stmt->bindParam(':url',$url);
            $stmt->bindParam(':estado',$estado);
            $stmt->execute();
            
            $idModulo = $this->conn->lastInsertId();
            echo "Se registró correctamente. El ID de módulo es:  ".$idModulo."\n";
            
        } catch (Exception $e) {
            echo "Error al registrarse.\n".$e->getMessage();
        }
    }
    
    public function consultarModulo($idmodulo) {
        $consulta="SELECT * FROM modulo WHERE id_modulo = :id_modulo";
        $stmt = $this->conn->prepare($consulta);

        $stmt->bindParam(':id_modulo',$idmodulo);
        $stmt->execute();
        
        $salida = $stmt->fetch(PDO::FETCH_ASSOC);
        if($salida){
            return $salida;
        }else{
            return null;
        }
    }
    
    public function actualizarModulo($idmodulo,$nombre) {
        try{
            $url="3lectro".$nombre."store@elecst.com";
            
            $actualiza="UPDATE modulo SET nombre = :nombre, url = :url WHERE id_modulo = :id_modulo";
            $stmt= $this->conn->prepare($actualiza);
            
            $stmt->bindParam(':id_modulo',$idmodulo);
            $stmt->bindParam(':nombre',$nombre);
            $stmt->bindParam(':url',$url);
            $stmt->execute();
            $salida=$stmt->fetch(PDO::FETCH_ASSOC);
            echo "Se actualizaron correctamente los datos.\n";
            
        }catch(PDOException $e) {
            echo "Error al intentar actualizar.\n".$e->getMessage();
        }
    }
    
    public function darBajaModulo($idmodulo,$nombre) {
        try{
            //Estado será siempre 0 para dar de baja al módulo
            $estado=0;

            $de_baja="UPDATE modulo SET estado = :estado WHERE id_modulo = :id_modulo AND nombre = :nombre";
            
            $stmt=$this->conn->prepare($de_baja);
            $stmt->bindParam(':id_modulo',$idmodulo);
            $stmt->bindParam(':nombre',$nombre);
            $stmt->bindParam(':estado',$estado);
            $stmt->execute();
            $salida=$stmt->fetch(PDO::FETCH_ASSOC);
            echo "Se dió de baja correctamente.\n";
        }catch(PDOException $e) {
            echo "Error al intentar dar de baja.\n".$e->getMessage();
        }
    } 
}
