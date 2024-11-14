<?php
namespace Biblioteca\Ciencia;
class Autor
{
    // Atributos
    protected $nombre;
    protected $nacionalidad;
    // Constructor
    public function __construct($nombre, $nacionalidad)
    {
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
    }
    // Método para mostrar detalles
    public function mostrarDetalles()
    {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Nacionalidad: " . $this->nacionalidad . "<br>";
    }
}

?>