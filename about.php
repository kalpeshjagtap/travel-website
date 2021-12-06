<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        .card {
            background: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            color: black;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
            padding: 3px;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }   

    </style>
</head>

<body>
    <?php include('navbar.php');?>

    <div class="about-section">
        <h1>Tourism Website✈</h1>
        <p>Made using Html, CSS, Javascript, PHP and mysql💻</p>
    </div>

    <h2 style="text-align:center">Developer</h2>
        <div class="card">
            <img src="./images/kj.jpg" alt="John" style="width:100%">
            <h1>Kalpesh Jagtap</h1>
            <p class="title">Full Stack Web Developer</p>
            <div style="margin: 24px 0;">
                <a href="https://github.com/kalpeshjagtap"><i class="fa fa-github"></i></a>
                <a href="https://www.linkedin.com/in/kalpesh-jagtap-5730b8210/"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a>
            </div>
            <p><button>Contact</button></p>
        </div>

</body>

</html>