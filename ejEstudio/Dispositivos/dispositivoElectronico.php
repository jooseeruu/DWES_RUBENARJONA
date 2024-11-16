<?php
namespace DispositivoElectronico;
abstract class DispositivoElectronico
{
    protected $marca;
    protected $bateria = 100;
    abstract protected function encender();
    abstract protected function apagar();
    abstract protected function reiniciar();
    abstract protected function mostrarInfo();
}
?>