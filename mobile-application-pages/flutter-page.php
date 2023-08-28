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
    <title>Let's-Learn | Flutter</title>

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
    <h3>Flutter</h3>
    <p> <a href="../homepage">home >></a><a href="../courses">courses >></a> <a href="../coursespage/mobile">Mobile Appilaction >></a> >> Flutter</p>
</section>

<!-- course-2 section starts  -->

<section class="main-videos">

    <div>
        <iframe src="https://www.youtube.com/embed/ly0hAtV7EBg?list=PLzMcBGfZo4-knQWGK2IC49Q_5AnQrFpzv" title="Flutter Tutorial For Beginners #1 - Setup For Flutter Mobile App Development" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 1</p>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/aqtCU7Nk9h4?list=PLzMcBGfZo4-knQWGK2IC49Q_5AnQrFpzv" title="Flutter Tutorial For Beginners #2 - Your First Flutter Application" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 2</p>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/jNDsTI-poYo?list=PLzMcBGfZo4-knQWGK2IC49Q_5AnQrFpzv" title="Flutter Tutorial For Beginners #3 - Stateful Widgets and Text Input" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 3</p>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/mXREh3S8Yw0?list=PLzMcBGfZo4-knQWGK2IC49Q_5AnQrFpzv" title="Flutter Tutorial For Beginners #4 - Button Presses and Callbacks" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 4</p>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/KDCoqqQN_vM?list=PLzMcBGfZo4-knQWGK2IC49Q_5AnQrFpzv" title="Flutter Tutorial For Beginners #5 - ListView (Part 1)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 5</p>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/VHK8VrTFk4c?list=PLzMcBGfZo4-knQWGK2IC49Q_5AnQrFpzv" title="Flutter Tutorial For Beginners #6 - ListView (Part 2)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 6</p>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/35BFOsQ_tZw?list=PLzMcBGfZo4-knQWGK2IC49Q_5AnQrFpzv" title="Flutter Tutorial For Beginners #7 - Page Navigation" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 7</p>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/LeTgMYlGVrM?list=PLzMcBGfZo4-knQWGK2IC49Q_5AnQrFpzv" title="Flutter Tutorial For Beginners #8 - Flutter with Firebase Setup" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 8</p>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/a78Qc8rpO7c?list=PLzMcBGfZo4-knQWGK2IC49Q_5AnQrFpzv" title="Flutter Tutorial For Beginners #9 - Adding Google Authentication with Firebase" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 9</p>
    </div>    
    <div>
        <iframe src="https://www.youtube.com/embed/qWjnxjB-sTA?list=PLzMcBGfZo4-knQWGK2IC49Q_5AnQrFpzv" title="Flutter Tutorial for Beginners #10 - Flutter Database with Firebase (Part 1)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 10</p>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/MvhAOfKT58A?list=PLzMcBGfZo4-knQWGK2IC49Q_5AnQrFpzv" title="Flutter Tutorial For Beginners #11 - Flutter Database with Firebase (Part 2)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Lesson 11</p>
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