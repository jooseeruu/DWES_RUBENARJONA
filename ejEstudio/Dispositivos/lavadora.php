<?php
namespace DispositivoElectronico;

class Lavadora extends DispositivoElectronico
{
    protected $modelo;
    protected $capacidad;
    protected $revoluciones;
    protected $consumo;

    function __construct($marca, $modelo, $capacidad, $revoluciones, $consumo, $bateria)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->capacidad = $capacidad;
        $this->revoluciones = $revoluciones;
        $this->consumo = $consumo;
        $this->bateria = $bateria;
    }
    public function encender()
    {
        return "La lavadora se ha encendido";
    }
    public function apagar()
    {
        return "La lavadora se ha apagado";
    }
    public function reiniciar()
    {
        return "La lavadora se ha reiniciado";
    }
    public function mostrarInfo()
    {
        return "La lavadora es una {$this->marca} {$this->modelo} con una capacidad de {$this->capacidad} kg, {$this->revoluciones} revoluciones por minuto y un consumo de {$this->consumo} kWh. La bateria esta al {$this->bateria}%";
    }
}
?>