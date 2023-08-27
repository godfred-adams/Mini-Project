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
    <title>Let's Learn | Homepage</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="shortcut icon" href="./images/android-chrome-512x512.png" type="image/x-icon">
</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="homepage" class="logo"> <i class="fa-solid fa-chalkboard-user fa-lg fa-fade"></i> Let's-learn</a>

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

<!-- home section starts  -->

<section class="home">

    <div class="image">
        <img src="images/casual-life-3d-young-man-working-on-laptop.png" alt="casual-life-3d-young-man-working-on-laptop">
    </div>

    <div class="content">
        <h3>Hello <?php echo $_SESSION['first_name'] ?> 🫡</h3>
        <h3 id="intro">Welcome to let's learn, we provide a variety of free courses to enhance learning and creativity.</h3>
        <p>Enroll in a course now, to upgrade and update your skills😁!</p>
        <a href="courses" class="btn get-started">Enroll now</a>
    </div>

</section>

<!-- end of the home page-->

<!-- categories section starts  -->

<h3 class="title">courses</h3>
<section class="category">

    <a href="./coursespage/webdev" class="box" id="cards">
        <img src="./images/coding.png" alt="an icon of web development">
        <h3>Web Development</h3>
    </a>
    <a href="./coursespage/mobile" class="box" id="cards">
        <img src="./images/app-development.png" alt="an icon of application development">
        <h3>Mobile Appllication Dev.</h3>
    </a>
    <a href="./coursespage/ui-ux" class="box" id="cards">
        <img src="./images/ui-design.png" alt="an icon of ui degign">
        <h3>Ui/Ux</h3>
    </a>
    <a href="./coursespage/cybersecurity" class="box" id="cards">
        <img src="./images/hack.png" alt="an icon of a man hacking">
        <h3>cybersecurity</h3>
    </a>
    <div class="more-courses">
        <a href="courses" class="btn">view more ></a>
    </div>
</section>

<!-- end of category section -->

<!-- chat section starts -->
<h3 class="title">Testimonials</h3>
<section class="chat">
    <div class="chat-card">
        <div class="profile">
            <img src="./images/teacher-5.png" alt="teacher">
            <p>Henry Martison</p>
        </div>
        <div class="message">
           <p> Let's Learn has really helped me in my academics, by providing it's free courses and has landed me a job in Google 🥳</p>
        </div>
    </div>
    <div class="chat-card">
        <div class="profile">
            <img src="./images/teacher-4.png" alt="teacher">
            <p>Becky Jones</p>
        </div>
        <div class="message">
           <p> Joining Let's Learn has been on of the amazing things that has ever happened to me in my life. I wish I knew this when I was much younger. I am 29 tho 🤭</p>
        </div>
    </div>
    <div class="chat-card">
        <div class="profile">
            <img src="./images/teacher-7.png" alt="teacher">
            <p>Fredrick Blankson</p>
        </div>
        <div class="message">
           <p>I heard of Let's learn in 2023. I thought it wasn't that effective. But let's learn has got some really amazingn stuffs. Join the community now 😉</p>
        </div>
    </div>
    
</section>





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