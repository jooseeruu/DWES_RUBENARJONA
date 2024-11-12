<?php
class Televisor
{
    // Atributos
    private $marca;
    private $color;
    private $tamano;
    private $peso;
    private $canalActual;
    private $volumenActual;

    // Constructor
    public function __construct($marca, $color, $tamano, $peso)
    {
        $this->marca = $marca;
        $this->color = $color;
        $this->tamano = $tamano;
        $this->peso = $peso;
        $this->canalActual = 1; // Canal inicial
        $this->volumenActual = 10; // Volumen inicial
    }

    // Getters y Setters para cada propiedad
    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getTamano()
    {
        return $this->tamano;
    }

    public function setTamano($tamano)
    {
        $this->tamano = $tamano;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getCanalActual()
    {
        return $this->canalActual;
    }

    public function setCanalActual($canal)
    {
        if ($canal > 0) {
            $this->canalActual = $canal;
        } else {
            echo "El canal debe ser un número positivo.<br>";
        }
    }

    public function getVolumenActual()
    {
        return $this->volumenActual;
    }

    public function setVolumenActual($volumen)
    {
        if ($volumen >= 0) {
            $this->volumenActual = $volumen;
        } else {
            echo "El volumen debe ser un número no negativo.<br>";
        }
    }

    // Métodos adicionales
    public function encender()
    {
        echo "El televisor está encendido.<br>";
    }

    public function apagar()
    {
        echo "El televisor está apagado.<br>";
    }

    public function subirCanal()
    {
        $this->canalActual++;
        echo "Canal subido a: " . $this->canalActual . "<br>";
    }

    public function bajarCanal()
    {
        if ($this->canalActual > 1) {
            $this->canalActual--;
            echo "Canal bajado a: " . $this->canalActual . "<br>";
        } else {
            echo "Ya estás en el canal más bajo.<br>";
        }
    }

    public function subirVolumen()
    {
        $this->volumenActual++;
        echo "Volumen subido a: " . $this->volumenActual . "<br>";
    }

    public function bajarVolumen()
    {
        if ($this->volumenActual > 0) {
            $this->volumenActual--;
            echo "Volumen bajado a: " . $this->volumenActual . "<br>";
        } else {
            echo "El volumen ya está en el mínimo.<br>";
        }
    }
}

// Ejemplo de uso
$miTelevisor = new Televisor("Samsung", "Negro", "55 pulgadas", "18 kg");
$miTelevisor->encender();
$miTelevisor->setCanalActual(5);
$miTelevisor->subirCanal();
$miTelevisor->setVolumenActual(15);
$miTelevisor->bajarVolumen();
$miTelevisor->apagar();

echo "Marca del televisor: " . $miTelevisor->getMarca() . "<br>";
echo "Color del televisor: " . $miTelevisor->getColor() . "<br>";
echo "Tamaño del televisor: " . $miTelevisor->getTamano() . "<br>";
echo "Peso del televisor: " . $miTelevisor->getPeso() . "<br>";
echo "Canal actual: " . $miTelevisor->getCanalActual() . "<br>";
echo "Volumen actual: " . $miTelevisor->getVolumenActual() . "<br>";
?>