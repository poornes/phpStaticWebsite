<?php
include 'dbconnect.php';
include 'partner.php';
include 'register.php';
// include 'login.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dine2me</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bc1656da22.js" crossorigin="anonymous"></script>
</head>
<body>
        <nav class="navbar navbar-expand-lg sticky-top">
                <a href="#" class="navbar-brand img-fluid"><img src="images/dine2me2.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse  navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About us</a></li> 
                        <li class="nav-item"><a class="nav-link" href="#aboutApp">About App</a></li>
                        <li class="nav-item"><a class="nav-link" href="#partner">Become partner</a></li>
                        <li class="nav-item" style="background-color:#fb6365; border-radius: 10px;"><a class="nav-link" style="color: #fff;"href="logout.php">Logout</a></li>
                        <!-- <input type="button" class="btn" value="Download app"> -->
                    </ul>
                </div>
        </nav>
        <!-- <//////////////////////HERO SECTION/////////////////////////////> -->
        <div class="content3">
        <h1 class="hero1">Receiving with open <br> arms to dine2me</u></h1> 
        <p class="herop"><i>Should not wait for anything <br> you want!</i></p>
        <input type="button" class="dbtn2" value="Download app" title="App is in developing stage">    
        </div>
        <!-- <//////////////////////ABOUT SECTION/////////////////////////////> -->
        <div class="about jumbotron  mt-5" id="about">
            <h1 class="about_text">About us</h1>
            <div class="jumbotron">
                <p >Waiting at restaurant to get order is boring. We went to eat at the restaurnt not to wait</p>
                                <p class="aboutP1">So <span style="color:#fb6356;"><i>Dine</i></span>2<span style="color:#fb6356;"><i>me</i></span> came up with a idea 2 save your time by <br> taking pre-orders from app with in the restaurant menu. so that <br> when the person came to restaurant the food will be readily prepared so the <br> the person will be served without any delay. We are planning to make app with simple interface</p>

            </div>
        </div>
         <h1 class="about_app" style="margin-top: 100px; margin-bottom: 50px;">About App</h1>
        <p class="aboutAppP1">Make your desire food cook within four steps </p>
        <!-- <//////////////////////ABOUT APP SECTION/////////////////////////////> -->
        </div>
        <div class="container-fluid padding" id="aboutApp">
        <div class="row text-center padding">
            <!-- <-========================location==========================-> -->
            <div class="pic col-xs-12 col-sm-6 col-md-6">
                <img src="images/location1.jpg" class="img-fluid">
            </div>
            <div class="jumbotron col-xs-12 col-sm-6 col-md-6">
                <h3>First step to select your location</h1>
                <p class="lead">Select the location you are reside in</p>
                <i class="fa-solid fa-1"></i>
            </div>


            <!-- <!-========================restaurant==========================-> -->


            <div class="jumbotron col-xs-12 col-sm-6 col-md-6">
                <h3>Second step to select your Restaurant</h1>
                <p class="lead">In this step you can select your desire restaurant by looking at rating and price</p>
                <i class="fa-solid fa-2"></i>
            </div>
            <div class="pic col-xs-12 col-sm-6 col-md-6">
                <img src="images/restaurant.jpg" class="img-fluid">
            </div>

            <!-- <-========================FOOD==========================-> -->

            <div class="pic col-xs-12 col-sm-6 col-md-6">
                <img src="images/food.jpg" class="img-fluid">
            </div>
            <div class="jumbotron col-xs-12 col-sm-6 col-md-6">
                <h2>Third step to select your food item.</h2> 
                <p>In this step a user can able to select his desire food item by restarunt menu</p>
                <i class="fa-solid fa-3"></i>
            </div>


            <!-- <-========================table==========================-> -->


            <div class="jumbotron col-xs-12 col-sm-6 col-md-6">
                <h2>Fourth step to select table</h2> 
                <p>This step is done after reaching to restarunt. You have to select the table your tabel number from my orders</p>
                <i class="fa-solid fa-4"></i>
            </div>
            <div class="pic col-xs-12 col-sm-6 col-md-6">
                <img src="images/table.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- <!-==================================Become a partner==========================-!> -->
            <form action="index.php" method="POST" class="jumbotron container" id="partner">
                <h1 class="formTextH1">Become a partner</h1>
                <h4>Request a call back</h4>
                <p class="lead">You just fill the form and our team will reach you within 24hours</p>
                <input type="text" name="restaurant" placeholder="Enter your restaruant name"> <br><br>
                <input type="text" name="userName" placeholder="Enter username"> <br><br>
                <input type="email" name="email" placeholder="Enter your email"> <br><br>
                <input type="phone" name="phone" placeholder="Enter your mobile number"> <br><br>
                <input type="text" name="location" placeholder="Enter your location"> <br><br>
                <input type="submit" value="Submit" class="btn">
            </form>
    <!--========================login and sign up=======================-->


    <!-- <div class="container cardContainer" id="signin">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>Login</h2>
                    <form method="POST">
                        <input type="email" class="input_box" name="username" placeholder="Enter your email" required>
                        <input type="password" class="input_box" name="password" placeholder="Enter your password" required>
                        <button type="submit" class="submit-btn">Sign in</button>
                    </form action="index.php" method="POST">
                    <button type="submit" class="btn" onclick="openRegister()">I'm new here</button>
                    <a href="#">Forgot password</a>
                </div>
                <div class="card-back">
                    <h2>Register</h2>
                    <form method="POST">
                        <input type="text" class="input_box" name="username" placeholder="Enter your name" required>
                        <input type="email" class="input_box" name="email" placeholder="Enter your email" required>
                        <input type="phone" class="input_box" name="phone" placeholder="Enter your mobile number">
                        <input type="password" class="input_box" name="password" placeholder="Enter your password" required>
                        <button type="submit" class="submit-btn">Sign up</button>
                    </form>
                    <button type="submit" class="btn" onclick="openLogin()">I have an accout</button>
                    <a href="#">Forgot password</a>
                </div>
            </div>
        </div>
    </div -->

    <!--==============================FOOTER=======================-->

    <div class="footer">
        <div class="row footerRow col-xs-12 col-sm-12">
            <div class="flogo col-md-4 col-lg-4 col-xl-4">
                <img src="images/logo.png">
                    <p><i>Should not wait for anything <br> you want!</i></p>

            </div>
            <div class="quickLinks">
                <h5>Quick links</h5>
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item"> <a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"> <a class="nav-link" href=".about_text">About us</a></li> 
                        <li class="nav-item"> <a class="nav-link" href="#">About App</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Become partner</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Sign in</a></li>
                        <li class="nav-item"> <a class="nav-link"href="#">Sign up</a></li>
                        <!-- <input type="button" class="btn" value="Download app"> -->
                    </ul>
            </div>
            <div class="addr col-md-4 col-lg-4 col-xl-4">
                <h5>Connect with us</h5>
                <p>Address <i class="fa-solid fa-location-dot"></i> <br> 27/2054 <br> Girraju colony <br> Dharmavaram -515671 <br> Sri sathaya sai district <br> Andhra pradesh <br> India</p>
                <p><i class="fa-solid fa-phone"></i> +91 8328033114</p>
            </div>
        </div>
    </div>
    <script>
        var card = document.getElementById('card');
        function openRegister(){
            card.style.transform = 'rotateY(-180deg)'
        }
        function openLogin(){
            card.style.transform = 'rotateY(0deg)'
        }
        
    </script>
</body>
</html>