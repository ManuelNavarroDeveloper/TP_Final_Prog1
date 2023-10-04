<?php
require "Books.php";
$sql = "SELECT user_id FROM books WHERE user_id = 'NULL'";
include 'conexion.php';
include 'querys.php';
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
        $prueba = new Querys($conex);
        $prueba->popular();
        $prueba->nameuser();
        $prueba->countLibros();
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

<br>

<a>Cantidad de libros que tenemos disponibles:
    <?php 
    $querys = new Querys($conex);   
    $count = $querys->countLibros();
    
    echo $count;

?></a>
<br>

</br>
<a href="//TP_Final_Prog1/logout.php"> Desloguearse </a>
</br>
</html>