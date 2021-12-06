<?php 
    session_start();
    $_SESSION["destination"] = "Kashmir";
?>

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Kashmir Package</title>
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
        <h2>Kashmir</h2>
    </div>
    <div class="header">
        <p2>Included locations</p2>
    </div>
    <div class="section-container">
        <div class="columns image" style="background-image:url('images/s.jpg')">
            &nbsp;
        </div>
        <div class="columns content">
            <div class="content-container">
                <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Srinagar</h3>
                <p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p>
                    Srinigar is a modern waterworld, dominated by Dal Lake and its twisting waterways, tree-lined Nagin
                    Lake, and the Jhelum River. Engulf yourself in local culture by embracing your sea legs and renting
                    one of the wooden boats called shikaras for a daytime or twilight cruise.
                    <span style="color: grey;">
                        <a href="https://en.wikipedia.org/wiki/Srinagar">visit here &#8599;</a>
                    </span>
                </p>

                <h5>The area</h5>
                <p style="color: grey;">
                    Boulevard Rd, Srinagar 190001 India
                </p>
                <p>Best nearby:</p>
                <span style="color: grey;">Attractions
                    27 within 10 kms</span>
            </div>
        </div>
    </div>
    <div class="section-container">
        <div class="columns content">
            <div class="content-container">
                <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Aru Valley</h3>
                <p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p>
                    Beautiful place full of raw nature away from being exploited by modern development must visit this
                    place if you are in pahalgam, people of Kashmir are very friendly and they respect and value the
                    guest.
                    <span style="color: grey;">
                        <a href="https://en.wikipedia.org/wiki/Aru,_Jammu_and_Kashmir">visit here &#8599;</a>
                    </span>
                </p>
                <p style="color: grey;">
                    pahalgam
                </p>
                <p>Best nearby:</p>
                <span style="color: grey;">Attractions
                    3 within 10 kms</span>
            </div>
        </div>
        <div class="columns image" style="background-image:url('images/av.jpg')">
            &nbsp;
        </div>
    </div>
    <div class="section-container">
        <div class="columns image" style="background-image:url('images/gg.jpg')">
            &nbsp;
        </div>
        <div class="columns content">
            <div class="content-container">
                <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Gulmarg Gondola</h3>
                <p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p>
                    Asia's largest and highest and world’s second-largest and second highest cable car project, Gulmarg
                    Gondola is the top attraction in Gulmarg. In fact, a Gulmarg tour without a ride on the popular
                    cable car is considered incomplete.
                    <span style="color: grey;">
                        <a href="https://en.wikipedia.org/wiki/Gulmarg_Gondola">visit here &#8599;</a>
                    </span>
                </p>

                <h5>The Area</h5>
                <p style="color: grey;">
                    Gulmarg
                </p>
                <p>Best nearby:</p>
                <span style="color: grey;">Attractions
                    4 within 10 kms</span>
            </div>
        </div>
    </div>
    <br>
    <div class="prices">
        <p1>Pricing</p1>
        <p>Adults : Rs. 1,0,000 per adult for 5 days. 10% increase per adult for every extra day.</p>
        <p>Children : Rs. 50,000 per child for 5 days. 10% increase per child for every extra day.</p>
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