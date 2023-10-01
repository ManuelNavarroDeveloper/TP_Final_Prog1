<?php
require "Books.php";
$sql = "SELECT user_id FROM books WHERE user_id = 'NULL'";
include 'conexion.php';
include 'prueba.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Libreria</title>
</head>
<form action="cookie.php" method="post">
    <h2> Elige el libro que quieres alquilar </h2><br>
    <label> Libros disponibles: </label><br>

    <br><select name="opcionLibro" class="seleccionar">
        <option value=""> Seleccione un libro</option>
        <?php
        $prueba = new Prueba($conex);
        $prueba->popular();
        $prueba->nameuser();
        ?>
    </select><br>
    <br><input type="submit" value="Alquilar" class="boton">
</form>
</body>

<br>

<a>Libros alquilados por la gente: 
    <?php 
    $books = new Books();   
    $titulos = $books->getTitle();
    $texto = implode(", ", $titulos);
    echo $texto;

?></a>
<br>

</br>
<a href="/TP_Rendir/TP_LIBRARIA_PROG1/logout.php"> Desloguearse </a>
</br>
</html>