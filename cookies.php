<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mostrar Cookie en PHP</title>
</head>

<body>

    <?php

    setcookie("miCookie", "Valor de la cookie", time() + (86400 * 30), "/"); // 86400 = 1 día
    
    if (!isset($_COOKIE["miCookie"])) {
        echo "<script>window.location.reload();</script>";
    } else {

        if (isset($_COOKIE["miCookie"])) {
            echo "El valor de la cookie 'miCookie' es: " . $_COOKIE["miCookie"];
        } else {
            echo "La cookie 'miCookie' no está configurada";
        }
    }
    ?>

</body>

</html>