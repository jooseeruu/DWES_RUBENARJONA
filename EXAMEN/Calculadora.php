<?php
// Se crea la clase Calculadora con los métodos sumar, restar, multiplicar, dividir y elevar.
// Se crea un método para cada operación.
class Calculadora
{
    public function sumar($a, $b)
    {
        return $a + $b;
    }
    public function restar($a, $b)
    {
        return $a - $b;
    }
    public function multiplicar($a, $b)
    {
        return $a * $b;
    }
    public function dividir($a, $b)
    {
        return $a / $b;
    }
    public function elevar($a, $b)
    {
        return pow($a, $b);
    }

}
?>