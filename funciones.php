<?php
// funciones.php

// 1. Definición de funciones
/**
 * Definición de una función simple.
 *
 * @param string $nombre Nombre de la persona.
 * @return string Saludo personalizado.
 */
function saludar($nombre)
{
    return "Hola, " . $nombre . "!";
}

// Llamada a la función
echo saludar("Juan") . PHP_EOL; // Salida: Hola, Juan!

// 2. Funciones con valores por defecto
/**
 * Suma dos números, con el segundo número por defecto en 10.
 *
 * @param int $a Primer número.
 * @param int $b Segundo número (por defecto 10).
 * @return int Resultado de la suma.
 */
function sumar($a, $b = 10)
{
    return $a + $b;
}

echo sumar(5) . PHP_EOL; // Salida: 15 (5 + 10)
echo sumar(5, 5) . PHP_EOL; // Salida: 10 (5 + 5)

// 3. Funciones anónimas (lambdas)
/**
 * Función que devuelve el doble de un número.
 */
$doblar = function ($numero) {
    return $numero * 2;
};

echo $doblar(4) . PHP_EOL; // Salida: 8

// 4. Funciones de devolución (callback)
/**
 * Procesa un número usando un callback.
 *
 * @param int $numero El número a procesar.
 * @param callable $callback La función de callback.
 * @return mixed Resultado del callback.
 */
function procesar($numero, $callback)
{
    return $callback($numero);
}

echo procesar(3, $doblar) . PHP_EOL; // Salida: 6

// 5. Funciones recursivas
/**
 * Calcula el factorial de un número.
 *
 * @param int $n Número entero.
 * @return int Factorial de n.
 */
function factorial($n)
{
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo factorial(5) . PHP_EOL; // Salida: 120

// 6. Funciones con número variable de argumentos
/**
 * Suma un número variable de argumentos.
 *
 * @param mixed ...$numeros Números a sumar.
 * @return int Resultado de la suma.
 */
function sumarVariadic(...$numeros)
{
    return array_sum($numeros);
}

echo sumarVariadic(1, 2, 3, 4) . PHP_EOL; // Salida: 10

// 7. Funciones en clases (métodos)
/**
 * Clase Calculadora.
 */
class Calculadora
{
    /**
     * Multiplica dos números.
     *
     * @param float $a Primer número.
     * @param float $b Segundo número.
     * @return float Resultado de la multiplicación.
     */
    public function multiplicar($a, $b)
    {
        return $a * $b;
    }
}

$calc = new Calculadora();
echo $calc->multiplicar(3, 4) . PHP_EOL; // Salida: 12

// 8. Funciones estáticas
/**
 * Clase CalculadoraEstatica.
 */
class CalculadoraEstatica
{
    /**
     * Suma dos números de forma estática.
     *
     * @param int $a Primer número.
     * @param int $b Segundo número.
     * @return int Resultado de la suma.
     */
    public static function suma($a, $b)
    {
        return $a + $b;
    }
}

echo CalculadoraEstatica::suma(10, 20) . PHP_EOL; // Salida: 30

// 9. Funciones con tipo de datos
/**
 * Divide dos números.
 *
 * @param float $a Dividendo.
 * @param float $b Divisor.
 * @return float Resultado de la división.
 * @throws InvalidArgumentException Si el divisor es cero.
 */
function dividir(float $a, float $b): float
{
    if ($b === 0) {
        throw new InvalidArgumentException("El divisor no puede ser cero.");
    }
    return $a / $b;
}

echo dividir(10, 2) . PHP_EOL; // Salida: 5
// echo dividir(10, 0); // Descomentar para probar la excepción

// 10. Documentación de funciones
/**
 * Esta función multiplica dos números.
 *
 * @param float $a El primer número.
 * @param float $b El segundo número.
 * @return float El resultado de la multiplicación.
 */
function multiplicar($a, $b)
{
    return $a * $b;
}

// 11. Funciones de espacio de nombres
namespace Matemáticas;

/**
 * Suma dos números en el espacio de nombres Matemáticas.
 *
 * @param int $a Primer número.
 * @param int $b Segundo número.
 * @return int Resultado de la suma.
 */
function sumar($a, $b)
{
    return $a + $b;
}

echo \Matemáticas\sumar(5, 7) . PHP_EOL; // Salida: 12

// 12. Funciones generadoras
/**
 * Generador que produce una secuencia de números.
 *
 * @param int $limite Límite superior.
 * @return Generator Secuencia de números.
 */
function generadorNumeros($limite)
{
    for ($i = 1; $i <= $limite; $i++) {
        yield $i;
    }
}

// Uso del generador
foreach (generadorNumeros(5) as $numero) {
    echo $numero . " "; // Salida: 1 2 3 4 5
}

?>