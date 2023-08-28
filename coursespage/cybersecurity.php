<?php 
  include ('../include/session.php');
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
    <title>Let's-Learn | Cybersecurity</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="./images/android-chrome-512x512.png" type="image/x-icon">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="../homepage" class="logo"> <i class="fa-solid fa-chalkboard-user fa-lg fa-fade"></i> let's-learn</a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a href="../homepage">home</a></li>
            <li><a href="../courses">courses</a></li>
            <li><a role="link" aria-disabled="true">forum<i class="fa-solid fa-arrow-down"></i></a>
            <ul>
                <li><a href="../the-room">the room</a></li>
                <li><a href="../chat">create a post</a></li>
            </ul>
            </li>
            <li><a href="https://poki.com/" target="_blank">playground</a></li>
            <li><a href="../profile">profile</a></li>
        </ul>
    </nav>

</header>
<!-- header section ends -->

<section class="heading">
    <h3>Cybersecurity</h3>
    <p> <a href="../homepage">home >></a><a href="../courses">courses >></a> Cybersecurity</p>
</section>

<!-- course-2 section starts  -->

<section class="course-2">

    <div class="box">
        <div class="image">
            <img src="../images/linux.png" alt="linux-icon">
        </div>
        <div class="content">
            <span>course 1</span>
            <h3>Introduction to Linux</h3>
            <p>Linux® is an open source operating system (OS). An operating system is the software that directly manages a system's hardware and resources, like CPU, memory, and storage. </p>
            <a href="../cybersecurity-pages/linux-page" class="btn">start course</a>
            <div class="icons">
                <a href="#"> <i class="fas fa-book"></i> 3 modules </a>
                <a href="#"> <i class="fas fa-clock"></i> 19 hours </a>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="../images/courses/pentest.png" alt="penetration-testing-logo">
        </div>
        <div class="content">
            <span>course 2</span>
            <h3>Penetration Testing</h3>
            <p>Penetration testing, also known as a pen test, is a simulated cyber attack against your computer system to check for exploitable vulnerabilities. And is an authorized simulated attack.</p>
            <a href="../cybersecurity-pages/pentest-page" class="btn">start course</a>
            <div class="icons">
                <a href="#"> <i class="fas fa-book"></i> 7 modules </a>
                <a href="#"> <i class="fas fa-clock"></i> 23 hours </a>
            </div>
        </div>
    </div>

</section>

<!-- course-2 section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>explore</h3>
            <a href="../homepage"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="../courses"> <i class="fas fa-arrow-right"></i> courses </a>
            <a href="../the-room"> <i class="fas fa-arrow-right"></i> the room </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="../chat"> <i class="fas fa-arrow-right"></i> create a post </a>
            <a href="https://poki.com/"> <i class="fas fa-arrow-right"></i> playground </a>
            <a href="../profile"> <i class="fas fa-arrow-right"></i> profile </a>
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
<script src="../js/script.js"></script>
</body>
</html>