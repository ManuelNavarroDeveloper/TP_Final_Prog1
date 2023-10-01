<?php
include 'conexion.php';
include 'Books.php';

$libro = $_POST["opcionLibro"];
$cookie = $_COOKIE["userid"];
$query = "UPDATE `books` SET `user_id` = " . $cookie . " WHERE `books`.`isbn` =" . $libro;
$alquilaLibro = mysqli_query($conex, $query);
header("Location: /TP_Rendir/TP_LIBRARIA_PROG1/principal.php");
