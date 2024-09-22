<?php 
date_default_timezone_set("America/Argentina/Buenos_Aires");

class Usuarios {
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $email;
    private $contrasena;
    private $db;

    function __construct($nom, $ape, $fecht, $email = null, $contrasena = null) {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->fechaNacimiento = $fecht;
        $this->email = $email;
        $this->contrasena = $contrasena ? password_hash($contrasena, PASSWORD_BCRYPT) : null;
        $this->db = new mysqli('localhost', 'root', '123456', 'phpavanzado');
    }

    public function calcular_edad() {
        $hoy = date("Y-m-d");
        $fechaNacimientoTimestamp = strtotime($this->fechaNacimiento);
        $hoyTimestamp = strtotime($hoy);
        $diferenciaEnSegundos = $hoyTimestamp - $fechaNacimientoTimestamp;
        $edadEnAnios = floor($diferenciaEnSegundos / (60 * 60 * 24 * 365));
        $dias = $diferenciaEnSegundos / (60 * 60 * 24);
        echo "tu edad: " . $edadEnAnios;
        echo "<br/>";
        echo "Tienes: " . floor($dias) . " Dias de Nacido/a";
    }

    public function imprime_caracteristicas() {
        echo "<p>" . $this->calcular_edad() . "</p>";
        echo "<p>Nombre: " . $this->nombre . "</p>";
        echo "<p>Apellido: " . $this->apellido . "</p>";
    }

    public function registrar() {
        if ($this->email && $this->contrasena) {
            $stmt = $this->db->prepare("INSERT INTO registro (email, contrasena) VALUES (?, ?)");
            $stmt->bind_param("ss", $this->email, $this->contrasena);
            return $stmt->execute();
        }
        return false;
    }

    public static function verificar($email, $contrasena) {
        $db = new mysqli('localhost', 'root', '123456', 'phpavanzado');
        $stmt = $db->prepare("SELECT contrasena FROM registro WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashed_contrasena);
            $stmt->fetch();
            return password_verify($contrasena, $hashed_contrasena);
        } else {
            return false;
        }
    }
}
?>
