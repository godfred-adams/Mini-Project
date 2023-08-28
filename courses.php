<?php 
  include ('./include/session.php');
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
    <title>Courses</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
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
    <h3>courses</h3>
    <p> <a href="homepage">home >></a> course </p>
</section>

<!-- course-1 section starts  -->

<section class="course-1">

    <div class="box">
        <img src="./images/coding.png" alt="an icon of web development">
        <h3>web development</h3>
        <p>Web development is the process of creating and maintaining websites and web applications. Using HTML, CSS, JavaScript, etc.</p>
        <a href="./coursespage/webdev" class="btn">view course</a>
    </div>

    <div class="box">
        <img src="./images/app-development.png" alt="an icon of application development">
        <h3>mobile application</h3>
        <p>Mobile application involves the creation of software applications specifically designed to run on mobile devices.</p>
        <a href="./coursespage/mobile" class="btn">view course</a>
    </div>

    <div class="box">
        <img src="./images/ui-design.png" alt="an icon of ui design">
        <h3>ui/ux</h3>
        <p>UI (User Interface) and UX (User Experience) are critical aspects of modern design and engaging interactions between users and digital products.</p>
        <a href="./coursespage/ui-ux" class="btn">view course</a>
    </div>
    
    <div class="box">
        <img src="./images/hack.png" alt="an icon of a man hacking">
        <h3>cybersecurity</h3>
        <p>Cybersecurity is the practice of protecting digital systems, networks, and data from unauthorized access and protecting systems.</p>
        <a href="./coursespage/cybersecurity" class="btn">view course</a>
    </div>

    <div class="box">
        <img src="./images/data-structure.png" alt="An Icon of data-structure">
        <h3>data structures and algorithm</h3>
        <p>Data structures are fundamental concepts in computer science, providing a systematic way to organize and store data efficiently.</p>
        <a href="./data-structures-pages/data-structures" class="btn">view course</a>
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