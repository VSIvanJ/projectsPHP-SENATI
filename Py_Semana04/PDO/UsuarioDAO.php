<?php

class UsuarioDAO extends Conexion{
    
    public function registrarUsuario($idpersona,$usuario,$clave) {
        try {
            // Verificar que el id_persona existe en la otra tabla
            $stmt = $this->conn->prepare("SELECT COUNT(*) FROM persona WHERE id_persona = :id_persona");
            $stmt->bindParam(':id_persona', $idpersona);
            $stmt->execute();
            
            if ($stmt->fetchColumn() == 0) {
                throw new Exception("El ID de cuenta ingresado no existe.");
            }
            //Estado siempre será 1, no se ingresará en registrar usuario
            $estado=1;
            
            $registro = "INSERT INTO usuario (id_persona, usuario, clave, estado) VALUES (:id_persona, :usuario, :clave, :estado)";
            $stmt = $this->conn->prepare($registro);
            $stmt->bindParam(':id_persona', $idpersona);
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':clave', $clave);
            $stmt->bindParam(':estado', $estado);
            $stmt->execute();
            
            $idUsuario = $this->conn->lastInsertId();
            echo "Su usuario se registró correctamente. El ID de usuario es:  ".$idUsuario."\n";
            echo "Recuerde o copie el ID mostrado en pantalla.\n";
            
        }catch(PDOException $e) {
            echo "Error al registrar usuario: ".$e->getMessage();
        }
    }
    
    //Consultar solo una fila
    public function consultarUsuario($usuario,$clave) {
        $sql = "SELECT * FROM usuario WHERE usuario = :usuario AND clave = :clave";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':clave', $clave);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        if($resultado){
            return $resultado;
        }else {
            return null;
        }
    }
    
    public function darBajaUsuario($idusuario,$clave) {
        try{
            //Estado será siempre 0 para indicar que se dió de baja al usuario
            $estado=0;

            $sql="UPDATE usuario SET estado= :estado WHERE id_usuario= :id_usuario AND clave =:clave";
            $stmt=$this->conn->prepare($sql);
            $stmt->bindParam(':id_usuario', $idusuario);
            $stmt->bindParam(':clave', $clave);
            $stmt->bindParam(':estado', $estado);
            $stmt->execute();
            $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
            echo "Se dió de baja al usuario correctamente.\n";
        }catch(PDOException $e) {
            echo "Error al intentar dar de baja al usuario: ".$e->getMessage();
        }
    }
    
    public function actualizarUsuario($idusuario,$usuario,$clave) {
        try{
            $sql="UPDATE usuario SET usuario = :usuario WHERE id_usuario = :id_usuario AND clave = :clave";
            $stmt= $this->conn->prepare($sql);

            $stmt->bindParam(':id_usuario',$idusuario);
            $stmt->bindParam(':usuario',$usuario);
            $stmt->bindParam(':clave',$clave);
            $stmt->execute();
            $salida=$stmt->fetch(PDO::FETCH_ASSOC);
            echo "Se actualizó correctamente su nombre de usuario.\n";
            
        }catch(PDOException $e) {
            echo "Error al intentar actualizar usuario: ".$e->getMessage();
        }
    }
}