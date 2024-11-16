<?php
namespace DispositivoElectronico;
require_once 'dispositivoElectronico.php';

class TelefonoMovil extends DispositivoElectronico
{

    protected $modelo;
    protected $almacenamiento;
    protected $camara;
    protected $pantalla;
    protected $procesador;
    function __construct($marca, $modelo, $almacenamiento, $camara, $pantalla, $procesador, $bateria)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->almacenamiento = $almacenamiento;
        $this->camara = $camara;
        $this->pantalla = $pantalla;
        $this->procesador = $procesador;
        $this->bateria = $bateria;
    }
    public function encender()
    {
        return "El telefono movil se ha encendido";
    }
    public function apagar()
    {
        return "El telefono movil se ha apagado";
    }
    public function reiniciar()
    {
        return "El telefono movil se ha reiniciado";
    }
    public function mostrarInfo()
    {
        return "El telefono movil es un {$this->marca} {$this->modelo} con {$this->almacenamiento} de almacenamiento, una camara de {$this->camara} megapixeles, una pantalla de {$this->pantalla} pulgadas y un procesador {$this->procesador}. La bateria esta al {$this->bateria}%";
    }
}

?>