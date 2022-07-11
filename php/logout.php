

<?php
//PERMITE LOGOUT 
  session_start();

  session_unset();

  session_destroy();

  header('Location: ../html/login.php');
?>