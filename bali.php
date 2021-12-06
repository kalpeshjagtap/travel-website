<?php 
    session_start();
    $_SESSION["destination"] = "Bali";
?>

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Bali Package</title>
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
        padding: 20px;
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
        border: none;
        color: white;
        padding: 0px 8px;
        font-size: 16px;
        cursor: pointer;
    }

    .checked {
        color: orange;
    }

    .text a {
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

</style>

<body>
    <div class="header">
        <h2>Bali</h2>
    </div>
    <div class="header">
        <p2>Included locations</p2>
    </div>
    <div class="section-container">
        <div class="columns image" style="background-image:url('images/pu.jpg')">
            &nbsp;
        </div>
        <div class="columns content">
            <div class="content-container">
                <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Ulun Danu Bratan Temple</h3>
                <p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p>
                    This lakeside temple was constructed in honor of Dewi Danu, goddess of the lake that was formed by a
                    volcanic eruption 30,000 years ago.
                    <span style="color: grey;">
                        <a href="https://en.wikipedia.org/wiki/Pura_Ulun_Danu_Bratan">visit here &#8599;</a>
                    </span>
                </p>

                <h5>The area</h5>
                <p style="color: grey;">
                    Jl. Raya Candi Kuning, Tabanan 82191 Indonesia
                </p>
                <p>Best nearby:</p>
                <span style="color: grey;">Restaurants
                    21 within 5 kms</span>
                <br>
            </div>
        </div>
    </div>
    <div class="section-container">
        <div class="columns content">
            <div class="content-container">
                <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Mount Batur</h3>
                <p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p>
                    Hikers will enjoy climbing this volcano, and the rewards of the views into the crater and of the
                    crystal clear waters of Lake Batur. (Note: visibility may be limited during the rainy season,
                    Dec.-March.)
                    <span style="color: grey;">
                        <a href="https://en.wikipedia.org/wiki/Louvre">visit here &#8599;</a>
                    </span>
                </p>

                <h5>The Area</h5>
                <p style="color: grey;">
                    Jalan Pendakian Gn Batur, Kintamani 80652 Indonesia
                </p>
                <p>Best nearby:</p>
                <span style="color: grey;">Attractions
                    15 within 10 kms</span>
            </div>
        </div>
        <div class="columns image" style="background-image:url('images/mb.jpg')">
            &nbsp;
        </div>
    </div>
    <div class="section-container">
        <div class="columns image" style="background-image:url('images/kb.jpg')">
            &nbsp;
        </div>
        <div class="columns content">
            <div class="content-container">
                <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Jardin des Tuileries</h3>
                <p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star-half-o checked"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p>
                    Kelingking Beach locally known as Pantai Kelingking is one of the most iconic and recognisable
                    tourist attractions in all of the Nusa islands.
                    <span style="color: grey;">
                        <a href="https://en.wikipedia.org/wiki/Nusa_Penida">visit here &#8599;</a>
                    </span>
                </p>

                <h5>The Area</h5>
                <p style="color: grey;">
                    Desa Bunga Mekar, 80771 Indonesia
                </p>
                <p>Best nearby:</p>
                <span style="color: grey;">Attractions
                    25 within 10 kms</span>
            </div>
        </div>
    </div>
    <br>
    <div class="prices">
        <p1>Pricing</p1>
        <br>
        <p>Adults : Rs. 2,00,000 per adult for 5 days. 10% increase per adult for every extra day.</p>
        <p>Children : Rs. 1,00,000 per child for 5 days. 10% increase per child for every extra day.</p>
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