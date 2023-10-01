<?php
  session_start();

  session_unset();

  session_destroy();

  header("Location: http://localhost/TP_Rendir/TP_LIBRARIA_PROG1/index.php");
  ?>
