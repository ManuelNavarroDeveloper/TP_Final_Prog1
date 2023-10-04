<?php
include 'conexion.php';
include 'Books.php';

$libro = $_POST["opcionLibro"];
$cookie = $_COOKIE["userid"];
$query = "UPDATE `books` SET `user_id` = " . $cookie . " WHERE `books`.`isbn` =" . $libro;
$alquilaLibro = mysqli_query($conex, $query);
header("Location: /TP_Final_Prog1/principal.php");
