<?php 
    session_start();
    $_SESSION["destination"] = "Dubai";
?>

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Dubai Package</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        overflow-x: hidden;
        font-family: 'Poppins', sans-serif;
    }

    .header, .prices{
        padding: 30px;
        font-size: 40px;
        text-align: center;
        background: white;
    }

    .prices p{
        margin-top: 10px;
        font-size: 20px;
    }

    .section-container {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        display: flex;
        flex-wrap: wrap;
    }

    .section-container .columns {
        flex: 0 0 auto;
        width: 50%;
    }

    .section-container .columns.image {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .section-container .columns.content .content-container {
        padding: 40px 50px;
    }

    .section-container .columns.content .content-container h5 {
        font-weight: 700;
        font-size: 25px;
        margin-bottom: 20px;
    }

    .section-container .columns.content .content-container p {
        font-weight: 400;
        font-size: 16px;
        margin-bottom: 20px;
        margin-bottom: 15px;
        text-align: justify;
    }

    .btn {
        background-color: orange;
        /* Blue background */
        border: none;
        /* Remove borders */
        color: white;
        /* White text */
        padding: 0px 8px;
        /* Some padding */
        font-size: 16px;
        /* Set a font size */
        cursor: pointer;
        /* Mouse pointer on hover */
    }

    .checked {
        color: orange;
    }

    .text a {
        /* border: 1px solid rgb(90, 203, 231); */
        padding: 10px 25px;
        text-decoration: none;
        font-size: 14px;
        margin-top: 20px;
        display: inline-block;
        color: white;
        background: rgb(8, 8, 8);
    }

    .text a:hover {
        background: rgb(90, 203, 231);
        cursor: pointer;
    }

    @media screen and (max-width:767px) {
        .section-container {
            flex-flow: row wrap;
        }

        .section-container .columns.image {
            display: block;
            order: 1;
            width: 100%;
            height: 250px;
        }

        .section-container .columns.content {
            display: block;
            order: 2;
            width: 100%;
        }

        .section-container .columns.content .content-container {
            padding: 20px 35px;
        }

        .section-container .columns.content .content-container h5 {
            margin-bottom: 5px;
        }
    }
</style>

<body>
    <div class="header">
        <h2>Dubai</h2>
    </div>
    <div class="header">
        <p2>Included locations</p2>
    </div>
    <div class="section-container">
        <div class="columns image" style="background-image:url('images/bk.jpg')">
            &nbsp;
        </div>
        <div class="columns content">
            <div class="content-container">
                <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Burj Khalifa</h3>
                <p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p>
                    Described as both a ‘Vertical City’ and ‘A Living Wonder,’ Burj Khalifa, developed by Dubai-based
                    Emaar Properties PJSC, is the world’s tallest building. Rising gracefully from the desert, Burj
                    Khalifa honours the city with its extraordinary union of art, engineering and meticulous
                    craftsmanship.
                    <span style="color: grey;">
                        <a href="https://en.wikipedia.org/wiki/Burj_Khalifa">visit here &#8599;</a>
                    </span>
                </p>
                <h5>The Area</h5>
                <p style="color: grey;">
                    1 Mohammed Bin Rashid Boulevard Downtown Dubai, Dubai 9440 United Arab Emirates
                </p>
                <p>How to get there:</p>
                <span style="color: grey;">Burj Khalifa/Dubai Mall • 9 min walk</span>
                <br>
                <h3 style="color: orange;">from &#8377;1,791.80</h3>
            </div>
        </div>
    </div>
    <div class="section-container">
        <div class="columns content">
            <div class="content-container">
                <h3><button class="btn"><i class="fa fa-map-marker"></i></button>The Dubai Fountain</h3>
                <p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p>
                    Choreographed to music, the Dubai Fountain shoots water as high as 500 feet –that’s as high as a
                    50-story building. Designed by creators of the Fountains of Bellagio in Vegas, Dubai Fountain
                    Performances occur daily on the 30-acre Burj Khalifa Lake.
                    <span style="color: grey;">
                        <a href="https://en.wikipedia.org/wiki/The_Dubai_Fountain">visit here &#8599;</a>
                    </span>
                </p>
                <h5>The Area</h5>
                <p style="color: grey;">
                    Downtown Dubai
                </p>
                <p>How to get there:</p>
                <span style="color: grey;">Duration: 30m</span>
                </h3>
            </div>
        </div>
        <div class="columns image" style="background-image:url('images/df.jpg')">
            &nbsp;
        </div>
    </div>
    <div class="section-container">
        <div class="columns image" style="background-image:url('images/dm.jpg')">
            &nbsp;
        </div>
        <div class="columns content">
            <div class="content-container">
                <h3><button class="btn"><i class="fa fa-map-marker"></i></button>The Dubai Mall</h3>
                <p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p>
                    This downtown mall is known for luxury stores like Cartier and Harry Winston. It also has an
                    aquarium, ice rink, and 360-degree views of the city from the world’s tallest building, The Burj
                    Khalifa.
                    <span style="color: grey;">
                        <a href="https://en.wikipedia.org/wiki/The_Dubai_Mall">visit here &#8599;</a>
                    </span>
                </p>

                <h5>The Area</h5>
                <p style="color: grey;">
                    Al Mussallah Rd DownTown Dubai, Near Souk Al Bahar Bridge, Dubai 113444 United Arab Emirates
                </p>
                <p>Best nearby:</p>
                <span style="color: grey;">Restaurants
                    2,523 within 5 kms</span>
                <h3 style="color: orange;">from &#8377;1,791.80</h3>
            </div>
        </div>
    </div>
    <br>
    <div class="prices">
        <p1>Pricing</p1>
        <p>Adults : Rs. 2,80,000 per adult for 5 days. 10% increase per adult for every extra day.</p>
        <p>Children : Rs. 1,40,000 per child for 5 days. 10% increase per child for every extra day.</p>
    </div>
    <div class="text" style="text-align: center;">
        <a onClick="myFunction()">Book Now</a>
    </div>
    <br><br>
</body>
<script>
    function myFunction() {
        window.location.href = "book.php";
    }
</script>

</html>