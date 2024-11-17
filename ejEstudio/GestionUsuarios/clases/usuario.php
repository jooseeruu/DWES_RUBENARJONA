<?php
namespace GestionUsuarios\Clases;

class Usuario
{
    protected $nombre;
    protected $apellidos;
    protected $email;
    protected $password;

    public function __construct($nombre, $apellidos, $email, $password)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->password = $password;
    }

    public function mostrarInfo()
    {
        return "Nombre: " . $this->nombre . "<br>Apellidos: " . $this->apellidos . "<br>Email: " . $this->email;
    }

    public function login($email, $password)
    {
        if ($this->email == $email && $this->password == $password) {
            return "Bienvenido " . $this->nombre;
        } else {
            return "Email o contraseña incorrectos";
        }
    }
    function getNombre()
    {
        return $this->nombre;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getPassword()
    {
        return $this->password;
    }
}
?>