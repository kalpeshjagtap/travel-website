<?php 
    session_start();
    $_SESSION["destination"] = "Ooty";
?>

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Ooty Package</title>
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
        <h2>Ooty</h2>
    </div>
    <div class="header">
        <p2>Included locations</p2>
    </div>
    <div class="section-container">
        <div class="columns image" style="background-image:url('images/nr.jpg')">
            &nbsp;
        </div>
        <div class="columns content">
            <div class="content-container">
                <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Nilgiri Mountain Railway</h3>
                <p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p>
                    Explore the "queen of hill stations" in a fully air-conditioned vehicle with a professional guide.
                    <span style="color: grey;">
                        <a href="https://en.wikipedia.org/wiki/Nilgiri_Mountain_Railway">visit here &#8599;</a>
                    </span>
                </p>

                <h5>Know before you go</h5>
                <p style="color: grey;">
                    Duration: 8h,
                    Mobile tickets accepted,
                    Instant confirmation
                </p>
                <p>Cancellation policy:</p>
                <span style="color: grey;">For a full refund, cancel at least 24 hours in advance of the start date of
                    the experience.</span>
            </div>
        </div>
    </div>
    <div class="section-container">
        <div class="columns content">
            <div class="content-container">
                <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Government Rose Garden</h3>
                <p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p>
                    Must visit scenic point in ooty. Better then other view points and its near to Ooty lake and
                    Crocker's walk.
                    <span style="color: grey;">
                        <a href="https://en.wikipedia.org/wiki/Government_Rose_Garden,_Ooty">visit here &#8599;</a>
                    </span>
                </p>

                <h5>The Area</h5>
                <p style="color: grey;">
                    Elk Hill Rd Nilgiri Mountains, Ooty (Udhagamandalam) 643001 India
                </p>
                <p>Best nearby:</p>
                <span style="color: grey;">Attractions
                    35 within 10 kms</span>
            </div>
        </div>
        <div class="columns image" style="background-image:url('images/rg.jpg')">
            &nbsp;
        </div>
    </div>
    <div class="section-container">
        <div class="columns image" style="background-image:url('images/c.jpg')">
            &nbsp;
        </div>
        <div class="columns content">
            <div class="content-container">
                <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Hills and Hues in Coonoor</h3>
                <p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p>
                    On this tour, we visit glorious green pastures painted with charming huts, carpets of tea
                    plantations criss-crossing, making it a topsy-turvy trail. We will visit a heritage church built
                    during the British colonisation. We also visit the War Memorial of World War 2, Indo Pak War, Indo
                    China War; see Retired Jets, Tankers and Military vehicle
                    <span style="color: grey;">
                        <a href="https://en.wikipedia.org/wiki/Coonoor">visit here &#8599;</a>
                    </span>
                </p>

                <h5>Know before you go</h5>
                <p style="color: grey;">
                    Duration: 3h,
                    Mobile tickets accepted,
                    Instant confirmation
                </p>
                <p>Cancellation policy:</p>
                <span style="color: grey;">For a full refund, cancel at least 24 hours in advance of the start date of
                    the experience.</span>
            </div>
        </div>
    </div>
    <br>
    <div class="prices">
        <p1>Pricing</p1>
        <p>Adults : Rs. 1,20,000 per adult for 5 days. 10% increase per adult for every extra day.</p>
        <p>Children : Rs. 60,000 per child for 5 days. 10% increase per child for every extra day.</p>
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