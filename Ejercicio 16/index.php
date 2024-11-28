<?php
require 'circulo.php';
require 'triangulo.php';
require 'rectangulo.php';
$circulo = new circulo(5);
echo "Area del circulo: " . $circulo->calcularArea() . "<br>";
echo "Perimetro del circulo: " . $circulo->calcularPerimetro() . "<br>";
$triangulo = new Triangulo(5, 3);
echo "Area del triangulo: " . $triangulo->calcularArea() . "<br>";
echo "Perimetro del triangulo: " . $triangulo->calcularPerimetro() . "<br>";
$rectangulo = new Rectangulo(5, 3);
echo "Area del rectangulo: " . $rectangulo->calcularArea() . "<br>";
echo "Perimetro del rectangulo: " . $rectangulo->calcularPerimetro() . "<br>";


?>