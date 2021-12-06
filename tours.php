<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            font-family: poppins;
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


        /* Center website */
        .main {
            max-width: 1000px;
            margin: auto;
        }

        h2 {
            font-size: 50px;
            word-break: break-all;
        }

        .row {
            margin: 8px -16px;
        }

        /* Add padding BETWEEN each column */
        .row,
        .row>.column {
            padding: 8px;
        }

        /* Create four equal columns that floats next to each other */
        .column {
            float: left;
            width: 30%;
        }

        /* Clear floats after rows */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Content */
        .content {
            border-radius: 3px;
            box-shadow: 0 15px 15px 0 rgba(254, 255, 255, 0.2);
            background-color: white;
            padding: 10px;
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
            border: 1px solid rgb(90, 203, 231);
            padding: 10px 25px;
            text-decoration: none;
            font-size: 14px;
            margin-top: 20px;
            display: inline-block;
            color: rgb(90, 203, 231);
        }

        .text a:hover {
            background: rgb(90, 203, 231);
            color: #333;
        }

    </style>
</head>

<body>
    <?php include('navbar.php');?>
    <div class="main">

        <h2>Tours</h2>
        <hr>

        <h3>INTERNATIONAL</h3>

        <div class="row">
            <div class="column">
                <div class="content">
                    <img src="images/5.jpg" alt="Mountains" style="width:100%">
                    <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Paris</h3>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p>Nowhere else on earth makes the heart swoon like the mention of Paris. The city lures with its
                        magnificent art, architecture, culture, and cuisine, but there’s also a quieter magic waiting to
                        be explored: the quaint cobbled lanes, the sweet patisseries around the corner, and the cosy
                        little bistros that beckon with a glass of Beaujolais. Get ready to make Paris your own.</p>
                    <div class="text" style="text-align: center;">
                        <a href="paris.php">View Package </a>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="content">
                    <img src="images/3.jpg" alt="Nature" style="width:100%">
                    <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Dubai</h3>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p>Largest. Tallest. Biggest. Dubai does everything to the extreme, standing out for its uber-modern
                        design in a historically conservative country. The soaring skyscrapers, palm-shaped islands, and
                        golden beaches, paired with vibrant nightlife, luxury shopping, and world-class dining, make the
                        city a sight to behold and be explored.
                    </p>
                    <div class="text" style="text-align: center;">
                        <a href="dubai.php">View Package</a>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="content">
                    <img src="images/4.jpg" alt="Mountains" style="width:100%">
                    <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Bali</h3>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p>No island has enchanted travellers quite like Bali. Less than half the size of Hawaii’s big
                        island, Bali manages to pack countless adventures into one small package. Dazzling beaches
                        beckon the sun seekers and surfers along the island’s southwest coast, while ancient temples and
                        a thriving wellness scene draw travellers inland to Ubud.
                    </p>
                    <div class="text" style="text-align: center;">
                        <a href="bali.php">View Package</a>
                    </div>
                </div>
            </div>

        </div>
        <h3>DOMESTIC</h3>

        <div class="row">
            <div class="column">
                <div class="content">
                    <img src="images/8.jpg" alt="Mountains" style="width:100%">
                    <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Jaipur</h3>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p>If you take one look at the glorious stucco buildings that line Jaipur's wide streets, you'll
                        understand why this is nicknamed "The Pink City." Spend your days exploring City Palace, Hawa
                        Mahal, and Amber and Jaigarh forts. And if you're looking for a unique souvenir, head to one of
                        the bazaars, where you can pick up a pair of camel-leather slippers.</p>
                    <div class="text" style="text-align: center;">
                        <a href="jaipur.php">View Package</a>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="content">
                    <img src="images/9.jpg" alt="Mountains" style="width:100%">
                    <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Ooty</h3>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p>Popularly referred to as Ooty, this gem among southern hill resorts is covered in eucalyptus and
                        pine trees and coffee and tea plantations. On a clear day, it's possible to see as far as the
                        Mysore plateau from Dodabetta Peak, the district's most prominent viewpoint. The Stone House, a
                        landmark 1822 bungalow, and St. Stephen's Church.</p>
                    <div class="text" style="text-align: center;">
                        <a href="ooty.php">View Package</a>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="content">
                    <img src="images/12.jpg" alt="Mountains" style="width:100%">
                    <h3><button class="btn"><i class="fa fa-map-marker"></i></button>Kashmir</h3>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p>The valley of Kashmir is as rich with history and political controversy as it is with culture and
                        natural phenomena. Sample exquisitely spiced native cuisines and festive teas, then walk off
                        your meal along the rugged trekking routes to the north. Marvel at the famous houseboats of
                        Srinagar and take a spiritual moment.The economy of Jammu and Kashmir.</p>
                    <div class="text" style="text-align: center;">
                        <a href="kashmir.php">View Package</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>