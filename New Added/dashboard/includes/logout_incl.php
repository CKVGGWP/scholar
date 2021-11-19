<?php
session_start(); 

      session_destroy();
      unset($_SESSION['authenticated']);
      header("location: ../admin_login.php");

?>