<?php
if (!isset($_SESSION['authenticated']))
{
    $_SESSION['status']= "Please Login to Continue!";
    header("location: ./admin_login.php");
    exit(0);
}

?>
