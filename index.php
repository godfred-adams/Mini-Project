<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An e-learning site built with HTML, CSS, JavaScript and PHP.">
    <meta name="keywords" content="e-learning, online courses, education, learning platform">
    <meta name="author" content="Godfred Adams">
    <title>Let's Learn</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="./images/android-chrome-512x512.png" type="image/x-icon">
</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="index" class="logo"> <i class="fa-solid fa-chalkboard-user fa-lg fa-fade"></i> Let's-learn</a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a href="login">Login</a></li>
            <li><a href="signUp">Register</a></li>
            <li><a href="about-us">About Us</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<section class="home">

    <div class="image">
        <img src="images/casual-life-3d-girl-studying-1.png" alt="An illustration of team work">
    </div>

    <div class="content">
        <h3>Let's Learn</h3>
        <h3 id="intro">The pathway to success!!  <br> Learn the easy way to become a pro 🥳</h3>
        <p id="message">Unlock a world of knowledge and skills at your own pace with our free e-learning platform. Whether you're an aspiring professional, a curious mind, or someone looking to enhance your expertise, we're here to guide you on your educational journey.</p>
        <a href="signUp" class="btn get-started">get started</a>
    </div>

</section>

<!-- end of the home page-->

<!-- categories section starts  -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container1">
        <h3>follow us on</h3>
        <div class="box">
            <a href="#" class="i-6"> <i class="fab fa-facebook fa-lg" style="color: rgb(2, 82, 244);"></i></a>
            <a href="#" class="i-1"> <i class="fab fa-twitter fa-lg" style="color: rgb(2, 82, 244);"></i></a>
            <a href="#" class="i-2"> <i class="fab fa-linkedin fa-lg" style="color: rgb(2, 82, 244);"></i></a>
            <a href="#" class="i-3"> <i class="fab fa-instagram fa-lg"></i></a>
            <a href="#" class="i-4"> <i class="fab fa-pinterest fa-lg"></i></a>
            <a href="#" class="i-5"> <i class="fab fa-github fa-lg" style="color: rgb(0, 0, 0);"></i></a>
        </div>
        <div>
            <p>&copy;Copyright Lets's Learn 2023</p>
        </div>

    </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>