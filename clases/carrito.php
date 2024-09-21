<?php
class Carrito {
    public $baseconectada;

    function __construct($base) {
        $this->baseconectada = $base;
    }

    public function listar_compra () {
        $resultado = $this->baseconectada->ejecutarQuery("SELECT * FROM compras");
        return $resultado;
    }
    public function introducir_compra ($codigoProd, $nombreProd, $descProd, $precioProd) {
       $this->baseconectada->ejecutarQuery("INSERT INTO compras VALUES (DEFAULT, $codigoProd, '$nombreProd', '$descProd', $precioProd)");
    }
    public function eliminar_compra ($cod) {
        $this->baseconectada->ejecutarQuery("DELETE FROM compras WHERE codigo=$cod");
    }
}
?>