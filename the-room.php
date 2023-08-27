<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An e-learning site built with HTML, CSS, JavaScript and PHP.">
    <meta name="keywords" content="e-learning, online courses, education, learning platform">
    <meta name="author" content="Godfred Adams">
    <title>Let's Learn | The Room</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/the-rooms.css">
    <link rel="shortcut icon" href="./images/android-chrome-512x512.png" type="image/x-icon">
</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="homepage" class="logo"> <i class="fa-solid fa-chalkboard-user fa-lg fa-fade"></i> let's-learn</a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
      <ul>
          <li><a href="homepage">home</a></li>
          <li><a href="courses">courses</a></li>
          <li><a href="">forum<i class="fa-solid fa-arrow-down"></i></a>
          <ul>
              <li><a href="the-room">the room</a></li>
              <li><a href="chat">create a post</a></li>
          </ul>
          </li>
          <li><a href="https://poki.com/" target="_blank">playground</a></li>
          <li><a href="profile">profile</a></li>
      </ul>
  </nav>

</header>

<!-- header section ends -->

<section class="heading">
    <h3>the room</h3>
    <p> <a href="homepage">home >></a> the room </p>
</section>

<!-- course-1 section starts  -->

<?php  
    include('./database/database_connection.php');

    $sql = "SELECT * FROM chats ORDER BY id DESC";
    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)){
      $post_title = $row['title'];
      $post_message = $row['post_message'];
      $post_first_name = $row['first_name'];
      $post_last_name = $row['last_name'];
      $post_date = $row['post_date'];
      $full_name = $post_first_name." ".$post_last_name;

      echo '

      <head>
      <link rel="stylesheet" href="./css/the-rooms.css">
      </head>
      <section class="posts">

      <div class="post-card">
        <div class="profile">
            <img src="./images/profile.png" alt="teacher">
            <div class="post-details">
              <p class="post-name" style=" font-weight: bold;">'.$full_name.'</p>
              <p class="post-date">posted on: '.$post_date.'</p>
            </div>
        </div>
        <div class="post-message">
          <p class="post-title">'.$post_title.'</p>
          <p>'.$post_message.'</p>
        </div>
        <div class="post-icons">
          <a href="" class="like"><i class="fa-classic fa-heart fa-xl"></i></a>
          <a href=""><i class="fa-regular fa-comments fa-xl"></i></a>
        </div>
      </div>
    
      
    </section>
      ';
    }
?>

<!-- course-1 section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>explore</h3>
            <a href="homepage"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="courses"> <i class="fas fa-arrow-right"></i> courses </a>
            <a href="the-room"> <i class="fas fa-arrow-right"></i> the room </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="chat"> <i class="fas fa-arrow-right"></i> create a post </a>
            <a href="https://poki.com/"> <i class="fas fa-arrow-right"></i> playground </a>

            <a href="profile"> <i class="fas fa-arrow-right"></i> profile </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        </div>

        <div class="box">
            <h3>info</h3>
            <a href="#"><p class="three">Privacy and Policy</p></a>
            <a href="#"><p class="two">Terms and Conditions</p></a>
            <a href="#"><p class="one">&copy; Copyright Let's-Learn 2023</p></a>
        </div>

    </div>

</section>



<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>