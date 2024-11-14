<?php
//Se requieren los archivos de las clases
require 'Biblioteca/Ficcion/Libro.php';
require 'Biblioteca/Ciencia/Libro.php';
require 'Biblioteca/Ficcion/Autor.php';
require 'Biblioteca/Ciencia/Autor.php';
//Las clases se importan con el uso de alias para evitar conflictos
use Biblioteca\Ficcion\Libro as FiccionLibro;
use Biblioteca\Ciencia\Libro as CienciaLibro;
use Biblioteca\Ficcion\Autor as FiccionAutor;
use Biblioteca\Ciencia\Autor as CienciaAutor;
//Se crean instancias de las clases
$libro1 = new FiccionLibro("El señor de los pasillos", 2333);
$libro2 = new CienciaLibro("La guía del mecanico", 1979);
$autor1 = new FiccionAutor("Pepe", "US");
$autor2 = new CienciaAutor("Manolo", "UK");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Se muestran los detalles de los libros y autores con sus respectivos métodos
    echo $libro1->mostrarDetalles();
    echo $libro2->mostrarDetalles();
    echo $autor1->mostrarDetalles();
    echo $autor2->mostrarDetalles();
    ?>
</body>

</html>