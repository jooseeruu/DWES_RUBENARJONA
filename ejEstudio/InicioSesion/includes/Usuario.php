<?php
class Usuario
{
    private $nombre;
    private $passwordHash;

    public function __construct($nombre, $password)
    {
        $this->nombre = $nombre;
        $this->passwordHash = password_hash($password, PASSWORD_DEFAULT); // Hash de la contraseña
    }

    public function verificarPassword($password)
    {
        return password_verify($password, $this->passwordHash); // Verifica el hash de la contraseña
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function saludar()
    {
        return "Hola, " . $this->nombre . "! Bienvenido de nuevo.";
    }
}
