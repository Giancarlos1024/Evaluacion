<?php
class Basedatos {
    private $conexion;

    function __construct($servidor, $usuario, $password, $base)
    {
       $this->conexion = new mysqli($servidor, $usuario, $password, $base);
    }

    public function ejecutarQuery($codigoSQL) {
          $instruccion = strtoupper(substr($codigoSQL, 0, 6));
          $mostrarCont = []; // Inicializa la variable como un array vacío
          
          switch($instruccion) {
            case 'INSERT':
            case 'UPDATE':
            case 'DELETE':
                $sql = $this->conexion->query($codigoSQL);
                break;
            case 'SELECT':
                $sql = $this->conexion->query($codigoSQL);
                while($listarCont = $sql->fetch_assoc()) {
                    $mostrarCont[] = $listarCont;
                }
                return $mostrarCont;
                break;
          }
    }
}
?>
