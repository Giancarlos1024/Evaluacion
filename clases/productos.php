<?php
class Productos {
    public $baseconectada;

    function __construct($base) {
        $this->baseconectada = $base;
    }

    public function listar_productos () {
        $resultado = $this->baseconectada->ejecutarQuery("SELECT * FROM productos");
        return $resultado;
    }
}
?>