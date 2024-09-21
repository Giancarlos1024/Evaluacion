<?php 
date_default_timezone_set("America/Argentina/Buenos_Aires");
class Usuarios{
    private $nombre;
    private $apellido;
    private $fechaNacimiento;

    function __construct($nom,$ape,$fecht)
    {
        $this->nombre=$nom;
        $this->apellido=$ape;
        $this->fechaNacimiento=$fecht;
    }
    public function calcular_edad(){
        $hoy=date("Y-m-d");
        $fechaNacimientoTimestamp=strtotime($this->fechaNacimiento);
        $hoyTimestamp=strtotime($hoy);
        $diferenciaEnSegundos=$hoyTimestamp-$fechaNacimientoTimestamp;
        $edadEnAnios=floor($diferenciaEnSegundos/(60*60*24*365));
        $dias=$diferenciaEnSegundos/(60*60*24);
        echo"tu edad:".$edadEnAnios;
        echo"<br/>";
        echo"Tienes:".floor($dias)."Dias de Nacido/a";

       
    }
    public function imprime_caracteristicas(){
        echo "<p>".$this->calcular_edad()."</p>";
        echo "<p>Nombre: ".$this->nombre."</p>";
        echo "<p>Apellido: ".$this->apellido."</p>";
      
     
        
    }
    
}

?>