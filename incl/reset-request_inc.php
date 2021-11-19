<?php
session_start();
include 'db_user.php';
include 'function.php';

if(isset($_POST["reset-request-submit"])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT * FROM_query accountInformation WHERE email = '$email' LIMIT 1"
    $check_email_run = mysqli_query($conn, $check_email);

    if(mysql_num_rows($check_email_run) > 0)
    {
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row['name'];
        $get_email = $row['email'];

        $update_token = "UPDATE `accountInformation` SET `resettoken`='$token' WHERE email = '$get_email' LIMIT 1;";
        $update_token_run = mysqli_query($conn, $update_token);

        if($update_token_run){
            send_password_reset($get_name, $get_email, $token);
            $_SESSION['status'] = "Password link sent to mail";
        header("location: ../login.php");
        exit();

        } else {
            $_SESSION['status'] = "Something Went Wrong. #1";
        header("location: ../forgot.php");
        exit();
        }

    } else{
        $_SESSION['status'] = "No Email Found";
        header("location: ../forgot.php");
        exit();
    }
}

/*$sql = "SELECT * FROM accountInformation WHERE 'email' = '$_POST[email]';";
$result = mysqli_query($conn, $sql);
if ($result) {
    if(mysqli_num_rows($result)==1) {
        $reset_token = bin2hex(random_bytes(16));
        date_default_timezone('Asia');
        $date=date("Y-m-d");
        $sql = "UPDATE `accountInformation` SET `resettoken`='$reset_token',`resettokenexpire`='$date' WHERE 'email' = '$_POST[email]';";
        if (mysqli_query($conn, $sql)) {
        echo"
        <script>
        alert('Password link sent to mail');
        window.location.href='forgot.php';
        </script>";
    } else{
    echo"
    <script>
    alert('Server down! Try again later!');
    window.location.href='forgot.php';
    </script>";
}
/*} else{
 echo"
 <script>
 alert('Email not found');
 window.location.href='forgot.php';
 </script>";
}*/
?>