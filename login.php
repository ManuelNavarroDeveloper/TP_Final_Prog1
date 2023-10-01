<?php

session_start();

if ($_COOKIE["userid"] != "") {
  
}
require 'database.php';

if (!empty($_POST['user']) && !empty($_POST['password'])) {
  $records = $connection->prepare('SELECT id, user, password FROM users WHERE user = :user');
  $records->bindParam(':user', $_POST['user']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['id']; ?>
    <script>
      document.cookie = "userid=<?php echo $_SESSION['user_id']; ?>; Secure; SameSite = Lax;";
      window.location.href = "principal.php";
    </script><?php

            
            } else {
              ?><script>
      alert("Las credenciales ingresadas son incorrectas");
      window.location.href = "index.php";
    </script><?php
           
            }
          }

              ?>