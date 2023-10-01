<?php

require 'database.php';


if (!empty($_POST['user']) && !empty($_POST['password'] && !empty($_POST['name'] && !empty($_POST['surname'])))) {
  $sql = "INSERT INTO users (user, password, name, surname) VALUES (:user, :password, :name, :surname)";
  $statement = $connection->prepare($sql);
  $statement->bindParam(':user', $_POST['user']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $statement->bindParam(':password', $password);
  $statement->bindParam(':name', $_POST['name']);
  $statement->bindParam(':surname', $_POST['surname']);


  if ($statement->execute()) {
    $message = 'Usuario creado';
  }

  header("Location: /TP_Rendir/TP_LIBRARIA_PROG1/index.php");
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Crear usuario</title>
   
</head>

<body>

  <?php if (!empty($message)) : ?>
    <p> <?= $message ?></p>
  <?php endif; ?>

  <h1>Crear usuario</h1>

  <form action="signup.php" method="POST">
    <input name="user" type="text" placeholder="Ingrese su usuario">
    <input name="name" type="text" placeholder="Ingrese su nombre">
    <input name="surname" type="text" placeholder="Ingrese su apellido">
    <input name="password" type="password" placeholder="Ingrese su contraseña">
    <input type="submit" value="Crear usuario">

  </form>

</body>

</html>