<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validar campos de texto
    if (isset($_POST['nombre']) && isset($_POST['apellido']) && !empty($_POST['nombre']) && !empty($_POST['apellido'])) {
        $nombre = htmlspecialchars($_POST['nombre']);
        $apellido = htmlspecialchars($_POST['apellido']);

        echo "Nombre: " . $nombre . "<br />";
        echo "Apellido: " . $apellido . "<br />";

        // Manejar la carga de archivos
        if (isset($_FILES['archivo'])) {
            $target_file = __DIR__ . "/archivo.png";
            $uploadOk = 1;

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Lo siento, el archivo ya existe.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES['archivo']['size'] > 500000) { // Limite de tamaño 500KB
                echo "Lo siento, el archivo es demasiado grande.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Lo siento, tu archivo no fue subido.";
                // If everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES['archivo']['tmp_name'], $target_file)) {
                    echo "El archivo archivo.png ha sido subido.";
                } else {
                    echo "Lo siento, hubo un error al subir tu archivo.";
                }
            }
        } else {
            echo "No se ha subido ningún archivo.";
        }
    } else {
        echo "Por favor, rellena todos los campos del formulario.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>