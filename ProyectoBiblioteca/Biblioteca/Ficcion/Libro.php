<?php
namespace Biblioteca\Ficcion;
class Libro
{
    // Atributos
    protected $titulo;
    protected $año;
    // Constructor
    public function __construct($titulo, $año)
    {
        $this->titulo = $titulo;
        $this->año = $año;
    }

    // Método para mostrar detalles
    public function mostrarDetalles()
    {
        echo "Titulo: " . $this->titulo . "<br>";
        echo "Año: " . $this->año . "<br>";
    }
}
?>