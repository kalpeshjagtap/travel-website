<?php 
    session_start();
    $_SESSION["destination"] = "Paris";
?>

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Paris Package</title>
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
        <h2>Paris</h2>
    </div>
    <div class="header">
        <p2>Included locations</p2>
    </div>
    <div class="section-container">
        <div class="columns image" style="background-image:url('images/et.jpg')">
            &nbsp;
        </div>
        <div class="columns content">
            <div class="content-container">
                <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Eiffel Tower</h3>
                <p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p>
                    Completed in 1889, this colossal landmark, although initially hated by many Parisians, is now a
                    famous symbol of French civic pride.
                    <span style="color: grey;">
                        <a href="https://en.wikipedia.org/wiki/Eiffel_Tower">visit here &#8599;</a>
                    </span>
                </p>

                <h5>The Area</h5>
                <p style="color: grey;">
                    5 Avenue Anatole France, 75007 Paris France
                </p>
                <p>How to get there:</p>
                <span style="color: grey;">Champ de Mars – Tour Eiffel • 7 min walk
                    Bir-Hakeim • 8 min walk</span>
                <br>
                <h3 style="color: orange;">from &#8377;2,779.35</h3>
            </div>
        </div>
    </div>
    <div class="section-container">
        <div class="columns content">
            <div class="content-container">
                <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Louvre Museum</h3>
                <p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p>
                    Home to Leonardo da Vinci's Mona Lisa, the Louvre is considered the world's greatest art museum,
                    with an unparalleled collection of items covering the full spectrum of art through the ages.
                    <span style="color: grey;">
                        <a href="https://en.wikipedia.org/wiki/Louvre">visit here &#8599;</a>
                    </span>
                </p>

                <h5>The Area</h5>
                <p style="color: grey;">
                    99 rue de Rivoli, 75001 Paris France
                </p>
                <p>How to get there:</p>
                <span style="color: grey;">Palais Royal – Musée du Louvre • 3 min walk
                    Louvre – Rivoli • 5 min walk</span>
                <h3 style="color: orange;">from &#8377;3,259.73
                </h3>
            </div>
        </div>
        <div class="columns image" style="background-image:url('images/lm.jpg')">
            &nbsp;
        </div>
    </div>
    <div class="section-container">
        <div class="columns image" style="background-image:url('images/t.jpg')">
            &nbsp;
        </div>
        <div class="columns content">
            <div class="content-container">
                <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Jardin des Tuileries</h3>
                <p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p>
                    Located within the Place de la Concorde, this garden demonstrates the Parisian style of intricate
                    landscaping.
                    <span style="color: grey;">
                        <a href="https://en.wikipedia.org/wiki/Tuileries_Garden">visit here &#8599;</a>
                    </span>
                </p>

                <h5>The Area</h5>
                <p style="color: grey;">
                    Jardin des Tuileries pl. de la Concorde, rue de Rivoli, 75058 Paris France
                </p>
                <p>How to get there:</p>
                <span style="color: grey;">Tuileries • 3 min walk
                    Musée d'Orsay • 4 min walk</span>
            </div>
        </div>
    </div>
    <br>
    <div class="prices">
        <p1>Pricing</p1>
        <p>Adults : Rs. 3,00,000 per adult for 5 days. 10% increase per adult for every extra day.</p>
        <p>Children : Rs. 1,50,000 per child for 5 days. 10% increase per child for every extra day.</p>
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