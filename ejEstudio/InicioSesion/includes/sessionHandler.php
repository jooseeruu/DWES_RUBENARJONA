<?php
session_start();

function iniciarSesion($usuario)
{
    $_SESSION['usuario'] = $usuario;
}

function cerrarSesion()
{
    session_unset();
    session_destroy();
}

function obtenerUsuarioDeSesion()
{
    if (isset($_SESSION['usuario']) && $_SESSION['usuario'] instanceof Usuario) {
        return $_SESSION['usuario'];
    } else {
        return null;
    }
}