<?php
require 'Dispositivos/dispositivoElectronico.php';
require 'Dispositivos/telefonoMovil.php';
require 'Dispositivos/lavadora.php';

use DispositivoElectronico\TelefonoMovil as TelefonoMovil;
use DispositivoElectronico\Lavadora as Lavadora;

$telefonoMovil = new TelefonoMovil("Samsung", "Galaxy S20", 128, 64, 6.2, "Snapdragon 865", 100);
$lavadora = new Lavadora("Bosch", "WUQ24468ES", 8, 1200, consumo: 0.78, bateria: 100);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dispositivos Electrónicos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        .device {
            margin-bottom: 20px;
        }

        .device h2 {
            margin: 0;
            color: #555;
        }

        .device p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <h1>Dispositivos Electrónicos</h1>
    <div class="device">
        <h2>Teléfono Móvil</h2>
        <?php
        echo "<p>" . $telefonoMovil->mostrarInfo() . "</p>";
        echo "<p>" . $telefonoMovil->encender() . "</p>";
        echo "<p>" . $telefonoMovil->apagar() . "</p>";
        echo "<p>" . $telefonoMovil->reiniciar() . "</p>";

        ?>
    </div>
    <div class="device">
        <h2>Lavadora</h2>
        <?php

        echo "<p>" . $lavadora->mostrarInfo() . "</p>";
        echo "<p>" . $lavadora->encender() . "</p>";
        echo "<p>" . $lavadora->apagar() . "</p>";
        echo "<p>" . $lavadora->reiniciar() . "</p>";
        ?>
    </div>
</body>

</html>