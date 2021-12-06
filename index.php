<?php 
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<style>
  body {
            background-image: url(./images/bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
        }

        html {
            box-sizing: border-box;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        .wrapper {
            width: 1170px;
            margin: auto;
        }

        header {
            background: transparent;
            height: 15vh;
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center center;
            position: relative;
        }


        .nav-area {
            float: right;
            list-style: none;
            margin-top: 30px;
        }

        .nav-area li {
            display: inline-block;
        }

        .nav-area li a {
            color: #fff;
            text-decoration: none;
            padding: 5px 20px;
            font-size: 16px;
        }

        .nav-area li a:hover {
            background: #fff;
            color: #333;
        }

        .logo {
            float: left;
        }

        .logo img {
            width: 100%;
            padding: 15px 0;
        }

.welcome-text {	
	position: absolute;
	width: 600px;
	height: 300px;
	margin: 15% 25%;
	text-align: center;
}

.welcome-text h1 {
	text-align: center;
	color: #27d1b2;
	text-transform: uppercase;
	font-size: 60px;
}

.welcome-text h1 span {
	color: #191a1bcf;
}

.welcome-text a {
	border: 1px solid #fff;
	padding: 10px 25px;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 14px;
	margin-top: 20px;
	display: inline-block;
	color: #fff;
}

.welcome-text a:hover {
	background: #fff;
	color: #333;
}

</style>

<body>
    <header>
        <div class="wrapper">
            <div class="logo">
            <h1 style="color: #fff;">JANK ✈</h1>
                <!-- <img src="https://i.postimg.cc/mg4rWBmv/logo.png" alt=""> -->
            </div>
            <ul class="nav-area">
                <li><a href="index.php">Home</a></li>
                <li><a href="slider.php">Gallery</a></li>
                <li><a href="tours.php">Tours</a></li>
                <li><a href="view.php">My Tours</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="welcome-text">
            <h1>
            Experience the <span>World</span></h1>
            <a href="slider.php">Explore</a>
        </div>
    </header>

</body>

</html>