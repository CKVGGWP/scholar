<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link rel="stylesheet" href="registration.css">
    <link rel=""stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
   </head>
<body>
  <div class="container">
        <div class="title">SIGN UP</div>
        <div class="content">
          <form action="incl/signup_inc.php" method = "POST">
            <div class="user-details">
              <div class="input-box">
                <br>
                 <h4>Account Information</h4><br>
                <span class="details">Full Name</span>
                <input type="text" name = "regName" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <br><br><br><span class="details">Email Address</span>
                <input type="text" name = "regEmail" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <br><br><br><span class="details">Password</span>
                <input type="password" name = "regPwd" placeholder="Enter your password" required>
              </div>
              <div class="input-box">
                <br><br><br><span class="details">Confirm Password</span>
                <input type="password" name = "pwdRepeat" placeholder="Confirm your password" required>
              </div>
              <div class="input-box"> 
                <br><br><br> <span class="details">Registration Code</span>
                <input type="text" name = "rcode" placeholder="Enter your Code" required>
              </div>
            </div>
            <div class="button">
              <input type="submit" name = "submit" value="Register">
            </div>
          </form>
        </div>
      </div>    
    </div>
  </div>
  <?php
if (isset($_GET["error"])) {
  if ($_GET["error"] == "emptyinput") {
    echo "All fields are required!";
  } 
  if ($_GET["error"] == "invalidEmail") {
    echo "Your email is invalid.";
  }
  if ($_GET["error"] == "passwordsdontmatch") {
    echo "Passwords don't match!";
  }
  if ($_GET["error"] == "emailalreadytoken") {
    echo "Email already in use!";
  }
}

?>
</body>
</html>
