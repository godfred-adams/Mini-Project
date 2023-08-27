<?php
// including the database connection file
  include('./database/database_connection.php');
  error_reporting(0);


    // creating variables to hold the data from the form
    $first_name = null;
    $last_name = null;
    $email = null;
    $username = null;
    $password = null;
    $confirm_password = null;

    if(isset($_POST['submit'])){
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $confirm_password = $_POST['confirm_password'];

      if($first_name && $last_name && $email && $username && $password && $confirm_password){
        if($password == $confirm_password && preg_match("/^[a-zA-Z]*$/", $first_name) && preg_match("/^[a-zA-Z]*$/", $last_name ) && preg_match("/^[a-z0-9]*$/", $username) && strlen($first_name) > 2 && strlen($last_name) > 2 && strlen($password) > 7 && filter_var($email, FILTER_VALIDATE_EMAIL)){
          $password_encryption = password_hash($password, PASSWORD_DEFAULT);
          $confirm_password_encryption = password_hash($confirm_password, PASSWORD_DEFAULT);
          $sql = "INSERT INTO users_info (first_name, last_name, email, username, pass, confirm_password) VALUES ('$first_name', '$last_name', '$email', '$username','$password_encryption', '$confirm_password_encryption')";
        
        mysqli_query($connection, $sql);

        $error_message = "<span style='  display: block; color: #39AB63;  width: 89%; margin: 10px auto; background-color: #D7F8E2;  font-size: 1.5rem; border: 1px solid #39AB59;  border-radius: 10px;  padding: 10px;'>Account created sucessfuly. Login now!</span>";

        }
        elseif(!preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $last_name)){
          $error_message = "<span style='  display: block;
          color: #ab4739;  width: 89%; margin: 10px auto; background-color: #f8d7da;  font-size: 1.5rem; border: 1px solid #ab4739;  border-radius: 10px;  padding: 10px;'>Names cannot contain symbols, numbers and space!</span>";
        }
        elseif (strlen($first_name) < 3 || strlen($last_name) < 3){
          $error_message = "<span style='  display: block;
          color: #ab4739;  width: 89%; margin: 10px auto; background-color: #f8d7da;  font-size: 1.5rem; border: 1px solid #ab4739;  border-radius: 10px;  padding: 10px;'>Letters of firstname or lastname cannot be 2!</span>";
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $error_message = "<span style='  display: block;
          color: #ab4739;  width: 89%; margin: 10px auto; background-color: #f8d7da;  font-size: 1.5rem; border: 1px solid #ab4739;  border-radius: 10px;  padding: 10px;'>Invalid email!</span>";
        }
        elseif (preg_match("/^[a-z0-9]*$/", $username)){
          $error_message = "<span style='  display: block;
          color: #ab4739;  width: 89%; margin: 10px auto; background-color: #f8d7da;  font-size: 1.5rem; border: 1px solid #ab4739;  border-radius: 10px;  padding: 10px;'>Username must contain numbers!</span>";
        }
        elseif(strlen($password) < 8){
          $error_message = "<span style='  display: block;
          color: #ab4739;  width: 89%; margin: 10px auto; background-color: #f8d7da;  font-size: 1.5rem; border: 1px solid #ab4739;  border-radius: 10px;  padding: 10px;'>Password should be 8 characters or more!</span>";
        }
        elseif($password != $confirm_password){
          $error_message = "<span style='  display: block;
          color: #ab4739;  width: 89%; margin: 10px auto; background-color: #f8d7da;  font-size: 1.5rem; border: 1px solid #ab4739;  border-radius: 10px;  padding: 10px;'>Passwords do not match</span>";
        }
      }
      else{
        $error_message = "<span style='  display: block;
          color: #ab4739;  width: 89%; margin: 10px auto; background-color: #f8d7da;  font-size: 1.5rem; border: 1px solid #ab4739;  border-radius: 10px;  padding: 10px;'>Fields cannot be empty</span>";
      }

    }
    mysqli_close($connection);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An e-learning site built with HTML, CSS, JavaScript and PHP.">
    <meta name="keywords" content="e-learning, online courses, education, learning platform">
    <meta name="author" content="Godfred Adams">
  <title>Let's Learn | SignUp</title>
<!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- custom css file -->
<link rel="stylesheet" href="css/logins.css">
<link rel="stylesheet" href="css/signup.css">
<link rel="shortcut icon" href="./images/android-chrome-512x512.png" type="image/x-icon">

</head>

<body>
  <!-- header section starts  -->

<header class="header">

  <a href="index" class="logo"> <i class="fa-solid fa-chalkboard-user fa-lg fa-fade"></i> Let's-learn</a>

  <div id="menu-btn" class="fas fa-bars"></div>

  <nav class="navbar">
      <ul>
        <a href="login"><li>Login</li></a>
  </nav>
</header>
<!-- end of header section -->
<section class="login-info">
  <div class="form-info">
    <h3>Hello there! <br>Create a new account 😊</h3>
    <form action="signUp" method="POST">
      <input type="text" name="first_name" id="first_name" placeholder="Firstname" value="<?php echo $first_name ?>">
      <input type="text" name="last_name" id="last_name" placeholder="Lastname" value="<?php echo $last_name ?>">
      <input type="email" name="email" id="email" placeholder="Enter your email" value="<?php echo $email ?>">
      <input type="text" name="username" id="username" placeholder="Enter a username" value="<?php echo $username ?>">
      <input type="password" name="password" id="password" placeholder="Password">
      <input type="password" name="confirm_password" id="confirm_password" placeholder="Re-enter password">
      <span><?php echo $error_message ?></span>
      <div class="inside">
        <input type="submit" value="Register" name="submit">

        <p class="sign-up">Already have an account?<br><a href="login">Login</a></p>
      </div>
    </form>
  </div>  
  <!-- Illutration icon -->
  <div class="illustration-icon">
    <img src="./images/casual-life-3d-designer-at-work-mail-deadline-chat.png" alt="casual-life-3d-study-objects-for-a-writing-desk">
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


