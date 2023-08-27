<?php 
  ob_start();
  session_start();
  if (isset($_SESSION ['email'])){
    header('Location:homepage');
  }

  error_reporting(0);
?>

<?php
    include('./database/database_connection.php');
    

    $_SESSION['email'] = null;
    $_SESSION['password'] = null;
    $email = null;
    $password = null;

    if(isset($_POST['login'])){
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['pass'] = $_POST['password'];
      $email = $_SESSION['email']; 

      if($_SESSION['email'] && $_SESSION['pass']){
        $sql = "SELECT * FROM users_info WHERE email = '$email'";
        $check = mysqli_query($connection, $sql);
        
        if(mysqli_num_rows($check) > 0){
          while($row = mysqli_fetch_assoc($check)){
            $db_first_name = $row['first_name'];
            $db_last_name = $row['last_name'];
            $_SESSION['first_name'] = $db_first_name;
            $_SESSION['last_name'] = $db_last_name;
            $db_email = $row['email'];
            $db_username = $row['username'];
            $db_password = $row['pass'];
            $_SESSION['email'] = $db_email;
            $_SESSION['username'] = $db_username;
          }
          $password_verification = password_verify($_SESSION['pass'], $db_password );
          if(($email == $db_email) && $password_verification){
            $_SESSION['first_name'];
            $_SESSION['last_name'];
            $_SESSION['username'];
            header("Location: homepage");
            ob_end_flush();
          }
          elseif($password != $db_password){
            $error_message = "<span style='  display: block; color: #ab4739;  width: 89%; margin: 10px auto; background-color: #f8d7da;  font-size: 1.5rem; border: 1px solid #ab4739;  border-radius: 10px;  padding: 10px;'>Incorrect password or email!</span>";
            } 
        }
        else{
          $error_message = "<span style='  display: block; color: #ab4739;  width: 89%; margin: 10px auto; background-color: #f8d7da;  font-size: 1.5rem; border: 1px solid #ab4739;  border-radius: 10px;  padding: 10px;'>User not registered. Resgister to continue!</span>";
        }
      } 
      else if(empty($_SESSION['email']) || empty($_SESSION['pass'])){
        $error_message = "<span style='  display: block; color: #ab4739;  width: 89%; margin: 10px auto; background-color: #f8d7da;  font-size: 1.5rem; border: 1px solid #ab4739;  border-radius: 10px;  padding: 10px;'>Input fields cannot be empty!</span>";
      }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An e-learning site built with HTML, CSS, JavaScript and PHP.">
    <meta name="keywords" content="e-learning, online courses, education, learning platform">
    <meta name="author" content="Godfred Adams">
  <title>Let's Learn | Login</title>
<!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- custom css file -->
<link rel="stylesheet" href="./css/logins.css">
<link rel="shortcut icon" href="./images/android-chrome-512x512.png" type="image/x-icon">
</head>
<body>
  <!-- header section starts  -->

<header class="header">

  <a href="index" class="logo"> <i class="fa-solid fa-chalkboard-user fa-lg fa-fade"></i> Let's-learn</a>

  <div id="menu-btn" class="fas fa-bars"></div>

  <nav class="navbar">
      <ul>
        <a href="signUp"><li>Register</li></a>
  </nav>
  
</header>

<!-- end of header section -->
<section class="login-info">
  <div class="form-info">
    <h3>Welcome back! <br>Login to your account 😉</h3>
    <form action="login" method="POST">
      <input type="email" name="email" id="email" placeholder="Your Email" value="<?php echo $_SESSION['email'] ?>">
      <input type="password" name="password" id="password" placeholder="Password">
      <span><?php echo $error_message ?></span>
      <p><a href="reset-password">Forgot password?</a></p>
      <input type="submit" value="Log in" name="login">
      <p class="sign-up">Don't have an account?<br><a href="signUp">Register</a></p>
    </form>
  </div>  
  <!-- Illutration icon -->
  <div class="illustration-icon">
    <img src="./images/casual-life-3d-study-objects-for-a-writing-desk.png" alt="casual-life-3d-study-objects-for-a-writing-desk">
  </div>
</section>

<!-- footer section -->
<section class="footer">
    <p class="one">&copy; Copyright Let's-Learn 2023</p>
    <p class="two">Terms and Conditions</p>
    <p class="three">Privacy and Policy</p>
</section>
</body>
</html>
