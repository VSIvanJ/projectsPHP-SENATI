<?php

class Usuario_ModuloDAO extends Conexion{
    
    public function registrarUsuarioModulo($id_usuario, $id_modulo) {
        try {
            $estado = 1;
            $fecha_activacion = date('Y-m-d H:i:s'); //Obtener la fecha y hora actuales

            $registro = "INSERT INTO usuario_modulo (id_usuario, id_modulo, estado, fecha_activacion) VALUES (:id_usuario, :id_modulo, :estado, :fecha_activacion)";
            $stmt = $this->conn->prepare($registro);
            $stmt->bindParam(':id_usuario', $id_usuario);
            $stmt->bindParam(':id_modulo', $id_modulo);
            $stmt->bindParam(':estado', $estado);
            $stmt->bindParam(':fecha_activacion', $fecha_activacion);
            $stmt->execute();
            
            $idUsuarioModulo = $this->conn->lastInsertId();
            echo "Se registró correctamente. El ID de módulo es:  ".$idUsuarioModulo."\n";
            echo "Felicidades...acabe de terminar de registrarse por completo. Bienvenido(a).";
        }catch(Exception $e) {
            echo "Error.\n" . $e->getMessage();
        }
    }
    
    public function consultarUsuarioModulo($userModulo) {
        
        $sql = "SELECT * FROM usuario_modulo WHERE iduser_Modulo = :iduser_Modulo";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':iduser_Modulo',$userModulo);
        $stmt->execute();
        
        $salida = $stmt->fetch(PDO::FETCH_ASSOC);
        if($salida){
            return $salida;
        }else{
            return null;
        }
    }
    
    public function actualizarUsuarioModulo($userModulo) {
        try{
            //Estado será siempre 1 para indicar que se reactivó
            $estado=1;
            $fecha_activacion = date('Y-m-d H:i:s'); //Obtener la fecha y hora de reactivación
            
            $sql="UPDATE usuario_modulo SET estado= :estado, fecha_activacion = :fecha_activacion WHERE iduser_Modulo= :iduser_Modulo";
            $stmt=$this->conn->prepare($sql);
            $stmt->bindParam(':iduser_Modulo', $userModulo);
            $stmt->bindParam(':estado', $estado);
            $stmt->bindParam(':fecha_activacion', $fecha_activacion);
            $stmt->execute();
            $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
            echo "Se reactivó la cuenta.\n";
        }catch(PDOException $e) {
            echo "Error al intentar reactivar cuenta.\n".$e->getMessage();
        }
    }
    public function darBajaUsuarioModulo($userModulo) {
        try{
            //Estado será siempre 0 para indicar que se dió de baja
            $estado=0;
            
            $sql="UPDATE usuario_modulo SET estado= :estado WHERE iduser_Modulo= :iduser_Modulo";
            $stmt=$this->conn->prepare($sql);
            $stmt->bindParam(':iduser_Modulo', $userModulo);
            $stmt->bindParam(':estado', $estado);
            $stmt->execute();
            $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
            echo "Se dió de baja.\n";
        }catch(PDOException $e) {
            echo "Error al intentar dar de baja.\n".$e->getMessage();
        }
    }
}
