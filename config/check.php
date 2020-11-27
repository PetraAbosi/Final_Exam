<?php

function isAuthorised(){

  if (isset($_SESSION['email'])) {
    return true;
  }

  header("Location: ../log_in/login.php");

}



 ?>
