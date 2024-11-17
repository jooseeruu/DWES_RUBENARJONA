<?php
namespace GestionUsuarios\Clases;
class Admin extends Usuario
{
    public function __construct($nombre, $apellidos, $email, $password)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->password = $password;

    }

    public function mostrarInfo()
    {
        return parent::mostrarInfo();
    }

    public function login($email, $password)
    {
        return parent::login($email, $password);
    }

    public function crearUsuario($nombre, $apellidos, $email, $password)
    {
        return new Usuario($nombre, $apellidos, $email, $password);
    }

    public function crearAdmin($nombre, $apellidos, $email, $password)
    {
        return new Admin($nombre, $apellidos, $email, $password);
    }

    public function eliminarUsuario($usuario)
    {
        unset($usuario);
    }
}
?>