<?php
abstract class forma
{
    abstract public function calcularArea();
}
class circulo extends forma
{
    protected $radio;
    public function __construct($radio)
    {
        $this->radio = $radio;
    }
    public function calcularArea()
    {
        return 3.1416 * $this->radio * $this->radio;
    }
}
class rectangulo extends forma
{
    protected $base;
    protected $altura;
    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }
    public function calcularArea()
    {
        return $this->base * $this->altura;
    }
}
class triangulo extends forma
{
    protected $base;
    protected $altura;
    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }
    public function calcularArea()
    {
        return ($this->base * $this->altura) / 2;
    }
}
$circulo = new circulo(5);
echo "El área del círculo es: " . $circulo->calcularArea() . "<br>";
$rectangulo = new rectangulo(5, 10);
echo "El área del rectángulo es: " . $rectangulo->calcularArea() . "<br>";
$triangulo = new triangulo(5, 10);
echo "El área del triángulo es: " . $triangulo->calcularArea() . "<br>";
?>