<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-image: url(./images/bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
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

        .main {
            max-width: 1000px;
            margin: auto;
        }

        h2 {
            /* text-align: center; */
            font-size: 50px;
            word-break: break-all;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            /* -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s; */
            animation-name: fade;
            animation-duration: 1.5s;
        }

        /* @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        } */

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }
    </style>
</head>

<body>

    <?php include('navbar.php');?>

    <div class="main">

        <h2>Gallery</h2>
        <hr>


        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 8</div>
                <img src="./images/lm.jpg" style="width:100%">
                <div class="text">International Tour</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 8</div>
                <img src="./images/gg.jpg" style="width:100%">
                <div class="text">Domestic Tour</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 8</div>
                <img src="./images/et.jpg" style="width:100%">
                <div class="text">International Tour</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 8</div>
                <img src="./images/av.jpg" style="width:100%">
                <div class="text">Domestic Tour</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 8</div>
                <img src="./images/3.jpg" style="width:100%">
                <div class="text">International Tour</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 8</div>
                <img src="./images/s.jpg" style="width:100%">
                <div class="text">Domestic Tour</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">7 / 8</div>
                <img src="./images/4.jpg" style="width:100%">
                <div class="text">International Tour</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">8 / 8</div>
                <img src="./images/rg.jpg" style="width:100%">
                <div class="text">Domestic Tour</div>
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

    </div>



    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 4000); // Change image every 2 seconds
        }
    </script>

</body>

</html>