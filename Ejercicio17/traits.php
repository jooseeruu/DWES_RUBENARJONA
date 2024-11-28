<?php

trait WiFi
{
    protected bool $wifiConnect = false;

    public function conectarWiFi(string $nombreDispositivo): string
    {
        $this->wifiConnect = true;
        return "WiFi conectado en el dispositivo $nombreDispositivo. Estado de conexión: " . ($this->wifiConnect ? "Conectado" : "Desconectado");
    }

    public function desconectarWiFi(string $nombreDispositivo): string
    {
        $this->wifiConnect = false;
        return "WiFi desconectado en el dispositivo $nombreDispositivo. Estado de conexión: " . ($this->wifiConnect ? "Conectado" : "Desconectado");
    }

    public function getNombreDispositivo(): string
    {
        return $this->nombreDispositivo;
    }
}

trait Bluetooth
{
    protected bool $bluetoothConnect = false;

    public function conectarBluetooth(string $nombreDispositivo): string
    {
        $this->bluetoothConnect = true;
        return "Bluetooth conectado en el dispositivo $nombreDispositivo. Estado de conexión: " . ($this->bluetoothConnect ? "Conectado" : "Desconectado");
    }

    public function desconectarBluetooth(string $nombreDispositivo): string
    {
        $this->bluetoothConnect = false;
        return "Bluetooth desconectado en el dispositivo $nombreDispositivo. Estado de conexión: " . ($this->bluetoothConnect ? "Conectado" : "Desconectado");
    }
}

class Dispositivo
{
    use WiFi, Bluetooth;
    protected string $nombreDispositivo;

}
class telefono extends Dispositivo
{
    protected $numtelefono;
    public function __construct(string $nombreDispositivo, $numtelefono)
    {
        $this->nombreDispositivo = $nombreDispositivo;
        $this->numtelefono = $numtelefono;
    }

    public function hacerLlamada(string $numero): string
    {
        return "Llamando al número $numero desde el dispositivo $this->nombreDispositivo";
    }
    public function getNumTelefono()
    {
        return $this->numtelefono;
    }
}
class tablet extends Dispositivo
{
    protected string $modelo;

    public function __construct(string $nombreDispositivo, string $modelo)
    {
        $this->nombreDispositivo = $nombreDispositivo;
        $this->modelo = $modelo;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function leerLibro(string $titulo): string
    {
        return "Leyendo el libro $titulo en el dispositivo $this->nombreDispositivo, modelo $this->modelo";
    }
}

$telefono = new telefono("Samsung Galaxy S10", "644742137");
echo $telefono->conectarWiFi($telefono->getNombreDispositivo()) . "<br>";
echo $telefono->conectarBluetooth($telefono->getNombreDispositivo()) . "<br>";
echo $telefono->hacerLlamada("123456789") . "<br>";
echo $telefono->desconectarWiFi($telefono->getNombreDispositivo()) . "<br>";
echo $telefono->desconectarBluetooth($telefono->getNombreDispositivo()) . "<br>";
echo $telefono->getNumTelefono() . "<br>";


$tablet = new tablet("Samsung Galaxy", "Tab A");
echo $tablet->conectarWiFi($tablet->getNombreDispositivo()) . "<br>";
echo $tablet->conectarBluetooth($tablet->getNombreDispositivo()) . "<br>";
echo $tablet->leerLibro("El señor de los anillos") . "<br>";
echo $tablet->desconectarWiFi($tablet->getNombreDispositivo()) . "<br>";
echo $tablet->desconectarBluetooth($tablet->getNombreDispositivo()) . "<br>";
echo $tablet->getModelo() . "<br>";


?>