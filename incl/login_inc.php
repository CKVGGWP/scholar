<?php

if (isset ($_POST["submit"]))
{
$username = $_POST["email"];
$pwd = $_POST["loginPassword"];

require_once 'db_user.php';
require_once 'function.php';

if (emptyInputLogin($username, $pwd)!== false)
{
    header("location: ../login.php?error=emptyinput");
    exit();
}

loginUser($conn, $username, $pwd);
}
else {
    header("location: ../home.php");
    exit();
}