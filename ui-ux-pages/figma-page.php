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
    <title>Let's-Learn | Figma</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/video.css">
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
    <h3>Figma</h3>
    <p> <a href="../homepage">home >></a><a href="../courses">courses >></a> <a href="../coursespage/ui-ux">UI/UX >></a> Figma</p>
</section>

<!-- course-2 section starts  -->

<section class="main-videos">

    <div>
        <iframe src="https://www.youtube.com/embed/Cx2dkpBxst8?list=PLXDU_eVOJTx7QHLShNqIXL1Cgbxj7HlN4" title="What&#39;s Figma?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Introduction</p>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/dXQ7IHkTiMM?list=PLXDU_eVOJTx7QHLShNqIXL1Cgbxj7HlN4" title="Figma For Beginners: Explore ideas (1/4)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 1</p>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/wvFd-z7jSaA?list=PLXDU_eVOJTx7QHLShNqIXL1Cgbxj7HlN4" title="Figma For Beginners: Create designs (2/4)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 2</p>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/lTIeZ2ahEkQ?list=PLXDU_eVOJTx7QHLShNqIXL1Cgbxj7HlN4" title="Figma For Beginners: Build prototypes (3/4)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 3</p>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/EQ_FL6u8EyM?list=PLXDU_eVOJTx7QHLShNqIXL1Cgbxj7HlN4" title="Figma For Beginners: Prepare for Handoff (4/4)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 4</p>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/axDzyLEfYgU?list=PLXDU_eVOJTx7QHLShNqIXL1Cgbxj7HlN4" title="Welcome to FigJam" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 5</p>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/BOt3MNB71gI" title="Free Figma Crash Course for Beginners 2023 | UI/UX Design" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 6</p>
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