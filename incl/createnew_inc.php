<?php
if(isset($_POST["create-new-submit"])){

$selector = ($_POST["selector"]);
$token = ($_POST["validator"));
$password = ($_POST("pwd"]);
$passwordRepeat = ($_POST["pwd-repeat"]);

if (empty($password) || empty($passwordRepeat)) {
    header("location: ../create-new-password.php?newpwd=empty");
    exit();
} else if ($password != $passwordRepeat) {
    header("location: ../create-new-password.php?newpwd=pwdnotmatch");
    exit();
}

$currentDate = date("U");

require 'db_user.php';

$sql = "SELECT * FROM pwreset WHERE pwdResetSelector=? AND pwdResetExpires >=? ";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo"Error!";
    exit();
} else
{
mysqli_stmt_bind_param($stmt, "s", $selector);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
if (!$row = mysqli_fetch_assoc($result)){
    echo "You need to re-submit your reset request.";
    exit();
    } else {

        $tokenBin = hex2bin($validator);
        $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

        if ($tokenCheck === false) {
            echo "You need to re-submit your reset request.";
            exit();
        } elseif ($tokenCheck === true) {

            $tokeEmail = $row ['pwdResetEmail'];

            $sql = "SELECT * FROM accountInformation WHERE email=?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo"Error!";
                exit();
            }else {
                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                mysqli_stmt_execute($stmt);

                 $result = mysqli_stmt_get_result($stmt);
                if (!$row = mysqli_fetch_assoc($result)){
                echo "Error!";
                exit();
                } else {
                    $sql = "UPDATE accountInformation SET pass=? WHERE email=?;";
                    $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo"Error!";
                exit();
            }else {
                $newPwdHashed = password_hash($password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "ss", $newPwdHashed, $tokenEmail);
                mysqli_stmt_execute($stmt);

$sql = "DELETE FROM pwdreset WHERE pwdResetEmail=? ";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo"Error!";
    exit();
} else
{
mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
mysqli_stmt_execute($stmt);
header("location: ../login.php?newpwd=passwordupdated");
}
                }
            }
        }

    }
}

} else {
    header("location: ../index.php");
}
