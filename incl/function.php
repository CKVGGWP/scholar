<?php
function emptyInputReg($regName, $regEmail, $regPass, $regPwdRepeat, $code) {
    $result;
    if (empty($regName) || empty($regEmail) || empty($regPass) || empty($regPwdRepeat) || empty($code) ) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidRegEmail($regEmail) {
    $result;
    if (!filter_var($regEmail, FILTER_VALIDATE_EMAIL) ) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch ($regPwd, $regPwdRepeat) {
    $result;
    if ($regPwd !== $regPwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function regEmailExists($conn, $regEmail) {
    $sql = "SELECT* FROM accountinformation WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("Location: ../login.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $regEmail);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $regName, $regEmail, $regPwd, $code) {
    $sql = "INSERT INTO accountInformation (usersName, email, pass, code) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("Location: ../registrationform.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($regPwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $regName, $regEmail, $hashedPwd, $code);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php?error=none");
    exit;


}

function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;

}

    function loginUser($conn, $username, $pwd){
        $regEmailExists = regEmailExists($conn, $username);

        if ($regEmailExists === false) {
            header("location: ../login.php?error=wronglogin");
            exit();
        }

        $pwdHashed =  $regEmailExists["pass"];
        $checkPwd = password_verify($pwd, $pwdHashed);

        if ($checkPwd === false){
            header("location: ../login.php?error=wronglogin");
            exit(); 
        } 
        else if ($checkPwd === true) {
            session_start();
            $SESSION["ID"] = $regEmailExists["ID"];
            $SESSION["ID"] = $regEmailExists["email"];
            header("location: ../procedure.php");
            exit;
        }
    }