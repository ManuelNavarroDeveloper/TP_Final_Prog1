<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'libreria';

try {
  $connection = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Error en la conexión: ' . $e->getMessage());
}
