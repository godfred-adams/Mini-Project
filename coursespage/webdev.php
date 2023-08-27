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
    <title>Let's-Learn | Web Development</title>

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
            <li><a href="">forum<i class="fa-solid fa-arrow-down"></i></a>
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
    <h3>web development</h3>
    <p> <a href="../homepage">home >></a><a href="../courses">courses >></a> web development </p>
</section>

<!-- course-2 section starts  -->

<section class="course-2">

    <div class="box">
        <div class="image">
            <img src="../images/courses/HTML (3).png" alt="html-icon">
        </div>
        <div class="content">
            <span>course 1</span>
            <h3>HTML 5 </h3>
            <p>Hypertext Markup Language, a standardized system for tagging text files and hyperlink effects on World Wide Web pages.</p>
            <a href="../webdev-course-pages/html_page" class="btn">start course</a>
            <div class="icons">
                <a href="#"> <i class="fas fa-book"></i> 3 modules </a>
                <a href="#"> <i class="fas fa-clock"></i> 9 hours </a>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="../images/courses/css3.png" alt="css-icon">
        </div>
        <div class="content">
            <span>course 2</span>
            <h3>CSS3</h3>
            <p>CSS stands for Cascading Style Sheets · CSS describes how HTML elements are to be displayed on screen, paper, or in other media</p>
            <a href="../webdev-course-pages/css_page" class="btn">start course</a>
            <div class="icons">
                <a href="#"> <i class="fas fa-book"></i> 3 modules </a>
                <a href="#"> <i class="fas fa-clock"></i> 19 hours </a>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="../images/courses/javascript-logo.png" alt="javascript-icon">
        </div>
        <div class="content">
            <span>course 3</span>
            <h3>JavaScript</h3>
            <p>an object-oriented computer programming language commonly used to create interactive effects within web browsers.</p>
            <a href="../webdev-course-pages/java_script_page" class="btn">start course</a>
            <div class="icons">
                <a href="#"> <i class="fas fa-book"></i> 3 modules </a>
                <a href="#"> <i class="fas fa-clock"></i> 14 hours </a>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="../images/courses/php.png" alt="php-icon">
        </div>
        <div class="content">
            <span>course 4</span>
            <h3>PHP</h3>
            <p>PHP is an open-source server-side scripting language that many devs use for web development.</p>
            <a href="../webdev-course-pages/php_page" class="btn">start course</a>
            <div class="icons">
                <a href="#"> <i class="fas fa-book"></i> 3 modules </a>
                <a href="#"> <i class="fas fa-clock"></i> 12 hours </a>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="../images/courses/github.png" alt="github-icon">
        </div>
        <div class="content">
            <span>course 5</span>
            <h3>git & github</h3>
            <p>Git is a version control system that keeps track of your code. GitHub, is a service that allows hosting and manage your code files on the internet.</p>
            <a href="../webdev-course-pages/github_page" class="btn">start course</a>
            <div class="icons">
                <a href="#"> <i class="fas fa-book"></i> 3 modules </a>
                <a href="#"> <i class="fas fa-clock"></i> 4 hours </a>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="../images/courses/images.png" alt="django-icon">
        </div>
        <div class="content">
            <span>course 6</span>
            <h3>django</h3>
            <p>Django is a high-level Python web framework that enables rapid development of secure and maintainable websites.</p>
            <a href="../webdev-course-pages/django_page" class="btn">start course</a>
            <div class="icons">
                <a href="#"> <i class="fas fa-book"></i> 2 modules </a>
                <a href="#"> <i class="fas fa-clock"></i> 5 hours </a>
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