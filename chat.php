<?php 
  include ('./include/session.php');

  error_reporting(0);
?>

<?php 
    include('./database/database_connection.php');

    $post_first_name = null;
    $post_last_name = null;
    $post_date = null;


    if(isset($_POST['submit'])){
        $post_first_name = $_SESSION['first_name'];
        $post_last_name = $_SESSION['last_name'];
        $post_date = date('Y.m.d');
        $post_title = $_POST['title'];  
        $post_message = $_POST['message'];

        
        if($post_first_name && $post_last_name && $post_date && $post_title && $post_message){
            $sql = "INSERT INTO chats (first_name, last_name, post_date, title, post_message) VALUES  ( '$post_first_name','$post_last_name','$post_date', '$post_title', '$post_message')";
        
            mysqli_query($connection, $sql);
            
            header('Location: the-room');    
        }
        
        elseif(empty($post_title) || empty($post_message)){
            
            $error_message = "<span style='  display: block; color: #ab4739;  width: 90%; margin: 10px 0; background-color: #f8d7da;  font-size: 1.5rem; border: 1px solid #ab4739;  border-radius: 10px;  padding: 10px;'>Title or message fileds cannot be empty</span>";
        }

    }

    mysqli_close($connection);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An e-learning site built with HTML, CSS, JavaScript and PHP.">
    <meta name="keywords" content="e-learning, online courses, education, learning platform">
    <meta name="author" content="Godfred Adams">
    <title>Let's Learn | Chat</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/chat.css">
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
            <li><a role="link" aria-disabled="true">forum<i class="fa-solid fa-arrow-down"></i></a>
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
    <h3>create a post</h3>
    <p> <a href="homepage">home >></a> <a href="the-room">the room >></a> create a post </p>
</section>

<!-- course-1 section starts  -->

<section class="chat">
    <div class="form">
    <form action="chat" method="post">
        <label for="title">title:</label>
        <br>
        <input type="text" name="title" id="title" placeholder="Post title goes here 👍">
        <br>
        <label for="message">message:</label>
        <br>
        <textarea name="message" id="message" cols="30" rows="5" placeholder="Your message goes here 🖊️"></textarea>
        <br>
        <span> <?php echo $error_message ?> </span>
        <input type="submit" name="submit" value="Post" class="btn">
    </form>
</div>
</section>

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
            <a href="https://poki.com/" target="blank"> <i class="fas fa-arrow-right"></i> playground </a>
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

