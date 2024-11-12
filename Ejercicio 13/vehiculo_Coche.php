<?php

abstract class Vehiculo
{

    protected $numRuedas;

    abstract protected function mostrarDetalles();
}


class Coche extends Vehiculo
{

    private $marca;
    private $modelo;
    private $color;
    private $velocidadMaxima;


    public function __construct($marca, $modelo, $color, $velocidadMaxima)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidadMaxima = $velocidadMaxima;
        $this->numRuedas = 4; // Valor por defecto
    }

    public function mostrarDetalles()
    {
        return "Este coche es un {$this->marca} {$this->modelo} de color {$this->color}, con {$this->numRuedas} ruedas y velocidad {$this->velocidadMaxima}.";
    }
}
$miCoche = new Coche("Ford", "Fiesta", "amarillo gamberro", 260);
echo $miCoche->mostrarDetalles();
?>