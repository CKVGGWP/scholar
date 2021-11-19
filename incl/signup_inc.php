<?php

if (isset ($_POST["submit"]))
{
   $regName = $_POST["regName"];
   $regEmail = $_POST["regEmail"];
   $regPass = $_POST["regPwd"];
   $regPwdRepeat = $_POST["pwdRepeat"];
   $code = $_POST["rcode"];

   require_once 'db_user.php';
   require_once 'function.php';

   if (emptyInputReg($regName, $regEmail, $regPass, $regPwdRepeat, $code) !== false){
    header("location: ../registrationform.php?error=emptyinput");
    exit();
}
 if (invalidRegEmail($regEmail) !== false) {
    header("location: ../registrationform.php?error=invalidEmail");
    exit();
 }

 if (pwdMatch($regPass, $regPwdRepeat) !== false) {
    header("location: ../registrationform.php?error=passwordsdontmatch");
    exit();
 }
 if (regEmailExists($conn, $regEmail) !== false) {
    header("location: ../registrationform.php?error=emailalreadytaken");
    exit();
}

createUser($conn, $regName, $regEmail, $regPass, $code);

}
else {
    header("location: ../login.php");
    exit();
}