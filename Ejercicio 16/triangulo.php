<?php
require_once 'forma.php';
class Triangulo implements Forma
{
    private $base;
    private $altura;
    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }
    public function calcularArea()
    {
        return ($this->base * $this->altura) / 2;
    }
    public function calcularPerimetro()
    {
        return 3 * $this->base;
    }
}
?>