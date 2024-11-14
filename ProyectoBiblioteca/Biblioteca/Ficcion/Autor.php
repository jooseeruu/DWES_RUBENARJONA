<?php
namespace Biblioteca\Ficcion;
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
    // Getters y Setters
    function getNombre()
    {
        return $this->nombre;
    }
    function getNacionalidad()
    {
        return $this->nacionalidad;
    }
    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    function setNacionalidad($nacionalidad)
    {
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