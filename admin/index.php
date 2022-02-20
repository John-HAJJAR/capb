
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
  <!-- <script defer src="login.js"></script> -->
</head>

<body>
<?php
    include '../db.php'; 
    $sql = 'SELECT * FROM account';
    $res = mysqli_query($conn,$sql);
    $resarr = mysqli_fetch_assoc($res);
    
    ?>
  <main id="main-holder">
    <h1 id="login-header">Login</h1>
    
    <div id="login-error-msg-holder">
      <p id="login-error-msg">Invalid username <span id="error-msg-second-line">and/or password</span></p>
    </div>
    
    <form id="login-form" action="index.php" method="post">
      <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username">
      <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">
      <input type="submit" name="loginbtn" value="Login" id="login-form-submit">
    </form>
  
  </main>
<?php 

if (isset($_POST['loginbtn'])) {
  $inputpass = $_POST['password'];
  $inputuser = $_POST['username'];

  $username = $resarr['User'];
  $hashedpass = $resarr['Password'];
  
  if ($inputuser == $username){
    if (password_verify($inputpass, $hashedpass))
      {
        $_SESSION['ID'] = $resarr['ID'];
        $_SESSION['status'] = true;
          header("Location: dashboard.php");
      } else {
        echo '<script>document.getElementById("login-error-msg").style.opacity = 1;</script>';
      }

  }
  
}
?>


</body>

</html>