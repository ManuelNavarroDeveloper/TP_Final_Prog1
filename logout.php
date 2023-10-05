<?php
  session_start();

  session_unset();

  session_destroy();

  header("Location: /TP_Final_Prog1/index.php");
  ?>
